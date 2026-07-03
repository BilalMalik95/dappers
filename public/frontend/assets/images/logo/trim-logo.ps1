Add-Type -AssemblyName System.Drawing

$bmp = New-Object System.Drawing.Bitmap("$PSScriptRoot\dappersolutions-lockup-dark-bg-transparent.png")
Write-Host "Original size: $($bmp.Width) x $($bmp.Height)"

# Find bounding box of non-transparent pixels
$minX = $bmp.Width
$minY = $bmp.Height
$maxX = 0
$maxY = 0

for ($y = 0; $y -lt $bmp.Height; $y++) {
    for ($x = 0; $x -lt $bmp.Width; $x++) {
        $pixel = $bmp.GetPixel($x, $y)
        if ($pixel.A -gt 10) {
            if ($x -lt $minX) { $minX = $x }
            if ($x -gt $maxX) { $maxX = $x }
            if ($y -lt $minY) { $minY = $y }
            if ($y -gt $maxY) { $maxY = $y }
        }
    }
}

Write-Host "Content bounds: ($minX, $minY) to ($maxX, $maxY)"

# Add small padding (4px each side)
$pad = 4
$minX = [Math]::Max(0, $minX - $pad)
$minY = [Math]::Max(0, $minY - $pad)
$maxX = [Math]::Min($bmp.Width - 1, $maxX + $pad)
$maxY = [Math]::Min($bmp.Height - 1, $maxY + $pad)

$cropW = $maxX - $minX + 1
$cropH = $maxY - $minY + 1
Write-Host "Cropped size (with 4px padding): ${cropW} x ${cropH}"

$cropped = New-Object System.Drawing.Bitmap($cropW, $cropH)
$g = [System.Drawing.Graphics]::FromImage($cropped)
$g.CompositingQuality = [System.Drawing.Drawing2D.CompositingQuality]::HighQuality
$g.InterpolationMode = [System.Drawing.Drawing2D.InterpolationMode]::HighQualityBicubic
$g.SmoothingMode = [System.Drawing.Drawing2D.SmoothingMode]::HighQuality

$destRect = New-Object System.Drawing.Rectangle(0, 0, $cropW, $cropH)
$srcRect = New-Object System.Drawing.Rectangle($minX, $minY, $cropW, $cropH)
$g.DrawImage($bmp, $destRect, $srcRect, [System.Drawing.GraphicsUnit]::Pixel)
$g.Dispose()

$outputPath = "$PSScriptRoot\dappersolutions-logo-trimmed.png"
$cropped.Save($outputPath, [System.Drawing.Imaging.ImageFormat]::Png)
Write-Host "Saved trimmed logo to: $outputPath"

$bmp.Dispose()
$cropped.Dispose()
