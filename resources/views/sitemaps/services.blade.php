<?php echo '<?xml version="1.0" encoding="UTF-8"?>'; ?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
        xsi:schemaLocation="http://www.sitemaps.org/schemas/sitemap/0.9 http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd">
    
   @foreach ($services as $service)
   
    <url>
        <loc>{{ url('/').'/'.$service->category->slug.'/'.$service->slug }}</loc>
    </url>
   @endforeach
    @foreach ($categories as $category)
     Related services for {{ $category->title }}
      
     foreach($category->services as $service)

     endforeach
   @endforeach

</urlset>