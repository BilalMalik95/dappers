from pathlib import Path
import re

base = Path('resources/views/frontend')
service_files = [
    'services.blade.php',
    'ai-backend-deployment.blade.php',
    'ai-agents.blade.php',
    'ai-development.blade.php',
    'ai-llm-integration.blade.php',
    'ai-rag-systems.blade.php',
    'web-development.blade.php',
    'web-dev-php.blade.php',
    'web-dev-laravel.blade.php',
    'web-dev-custom.blade.php',
    'web-design.blade.php',
    'graphic-design-branding.blade.php',
    'digital-marketing.blade.php',
    'ppc-advertising.blade.php',
    'seo-optimization.blade.php',
    'responsive-design.blade.php',
    'ui-ux-design.blade.php',
]

new_urls = [
    'https://images.unsplash.com/photo-1517430816045-df4b7de11100?auto=format&fit=crop&w=1400&q=85',
    'https://images.unsplash.com/photo-1517248135467-4c7edcad34c4?auto=format&fit=crop&w=1400&q=85',
    'https://images.unsplash.com/photo-1521737604893-d14cc237f11d?auto=format&fit=crop&w=1400&q=85',
    'https://images.unsplash.com/photo-1522202176988-66273c2fd55f?auto=format&fit=crop&w=1400&q=85',
    'https://images.unsplash.com/photo-1533750349088-cd871a92f312?auto=format&fit=crop&w=1400&q=85',
    'https://images.unsplash.com/photo-1531746790731-6c087fecd65a?auto=format&fit=crop&w=1400&q=85',
    'https://images.unsplash.com/photo-1547658719-da2b51169166?auto=format&fit=crop&w=1400&q=85',
    'https://images.unsplash.com/photo-1557804506-669a67965ba0?auto=format&fit=crop&w=1400&q=85',
    'https://images.unsplash.com/photo-1558494949-ef010cbdcc31?auto=format&fit=crop&w=1400&q=85',
    'https://images.unsplash.com/photo-1555529669-8e3cf233d0d0?auto=format&fit=crop&w=1400&q=85',
    'https://images.unsplash.com/photo-1509420316987-7f596a4370ff?auto=format&fit=crop&w=1400&q=85',
    'https://images.unsplash.com/photo-1519389950473-47ba0277781c?auto=format&fit=crop&w=1400&q=85',
    'https://images.unsplash.com/photo-1504868584819-f8e8b4b6d7e3?auto=format&fit=crop&w=1400&q=85',
    'https://images.unsplash.com/photo-1506794778202-cad84cf45f1d?auto=format&fit=crop&w=1400&q=85',
    'https://images.unsplash.com/photo-1551434678-e076c223a692?auto=format&fit=crop&w=1400&q=85',
    'https://images.unsplash.com/photo-1600132806370-bf17e65e942f?auto=format&fit=crop&w=1400&q=85',
    'https://images.unsplash.com/photo-1611162617213-7d7a39e9b1d7?auto=format&fit=crop&w=1400&q=85',
    'https://images.unsplash.com/photo-1634656908115-2f9c27013135?auto=format&fit=crop&w=1400&q=85',
    'https://images.unsplash.com/photo-1596526131083-e8c633c948d2?auto=format&fit=crop&w=1400&q=85',
    'https://images.unsplash.com/photo-1498050108023-c5249f4df085?auto=format&fit=crop&w=1400&q=85',
]

url_pattern = re.compile(r'https://images\.unsplash\.com/photo-[^"\)\']+')

for name in service_files:
    path = base / name
    if not path.exists():
        print(f'MISSING {name}')
        continue

    text = path.read_text(encoding='utf-8')
    old_urls = list(dict.fromkeys(url_pattern.findall(text)))
    if not old_urls:
        print(f'NO UNSPLASH URLS {name}')
        continue

    for idx, old_url in enumerate(old_urls):
        replacement = new_urls[idx % len(new_urls)]
        text = text.replace(old_url, replacement)
    path.write_text(text, encoding='utf-8')
    print(f'UPDATED {name}: {len(old_urls)} images replaced')

category = base / 'category.blade.php'
if category.exists():
    text = category.read_text(encoding='utf-8')
    text = text.replace("@section('meta_description',$category->meta_keywords)", "@section('meta_description',$category->meta_description)")
    text = text.replace("@section('meta_keywords',$category->meta_description)", "@section('meta_keywords',$category->meta_keywords)")
    text = text.replace(
        """<img src="{{ asset('frontend/assets/images') . '/'. $category->image }}" alt="{{ $category->name }}">""",
        """<img src="{{ asset('frontend/assets/images') . '/'. $category->image }}" alt="{{ $category->name }} service category image">"""
    )
    category.write_text(text, encoding='utf-8')
    print('FIXED category.blade.php meta/alt')
else:
    print('MISSING category.blade.php')

service_details = base / 'service-details.blade.php'
if service_details.exists():
    text = service_details.read_text(encoding='utf-8')
    text = text.replace("@section('meta_description',$categoryService->service[0]->meta_keywords)", "@section('meta_description',$categoryService->service[0]->meta_description)")
    text = text.replace("@section('meta_keywords',$categoryService->service[0]->meta_description)", "@section('meta_keywords',$categoryService->service[0]->meta_keywords)")
    text = text.replace(
        """<img src="{{ asset('frontend/assets/images/services') . '/'. $categoryService->service[0]->image }}" alt="{{ $categoryService->service[0]->name }}">""",
        """<img src="{{ asset('frontend/assets/images/services') . '/'. $categoryService->service[0]->image }}" alt="{{ $categoryService->service[0]->name }} service image">"""
    )
    service_details.write_text(text, encoding='utf-8')
    print('FIXED service-details.blade.php meta/alt')
else:
    print('MISSING service-details.blade.php')

partial = base / 'partials' / 'dynamic-service-cards.blade.php'
if partial.exists():
    text = partial.read_text(encoding='utf-8')
    text = text.replace('alt="{{ $feature->name }}"', 'alt="{{ $feature->name }} service image" loading="lazy" decoding="async" title="{{ $feature->name }}"')
    text = text.replace('alt="{{ $service->name }}"', 'alt="{{ $service->name }} service image" loading="lazy" decoding="async" title="{{ $service->name }}"')
    partial.write_text(text, encoding='utf-8')
    print('FIXED dynamic-service-cards.blade.php img alt/attributes')
else:
    print('MISSING dynamic-service-cards.blade.php')
