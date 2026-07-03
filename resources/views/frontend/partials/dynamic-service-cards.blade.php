@php
    $services = $services ?? collect();
    $feature = $services->first();
    $rest = $services->slice(1);
    $mini = $rest->take(4);
    $wide = $rest->slice(4);

    $serviceImage = fn ($service) => str_starts_with((string) $service->image, 'http')
        ? $service->image
        : asset('frontend/assets/images/services/' . $service->image);
@endphp

@if ($feature)
    <div class="services-v2-layout">

        <a href="{{ route('contact_us') }}" class="service-feature-card">
            <div class="service-feature-img">
                <img src="{{ $serviceImage($feature) }}" alt="{{ $feature->name }} service image" loading="lazy" decoding="async" title="{{ $feature->name }}">
            </div>
            <div class="service-feature-content">
                <span class="service-tag">Featured</span>
                <h3>{{ $feature->name }}</h3>
                <p>{{ $feature->short_description }}</p>
                <div class="service-card-action">
                    Discuss This Service
                    <i class="fa-solid fa-arrow-right"></i>
                </div>
            </div>
        </a>

        @if ($mini->isNotEmpty())
            <div class="services-v2-stack">
                @foreach ($mini as $i => $service)
                    <a href="{{ route('contact_us') }}" class="service-mini-card">
                        <div class="service-mini-icon">
                            <img src="{{ $serviceImage($service) }}" alt="{{ $service->name }} service image" loading="lazy" decoding="async" title="{{ $service->name }}">
                        </div>
                        <div>
                            <span>{{ sprintf('%02d', $i + 1) }}</span>
                            <h3>{{ $service->name }}</h3>
                            <p>{{ $service->short_description }}</p>
                        </div>
                    </a>
                @endforeach
            </div>
        @endif

    </div>

    @if ($wide->isNotEmpty())
        <div class="services-v2-bottom">
            @foreach ($wide as $i => $service)
                <a href="{{ route('contact_us') }}" class="service-wide-card">
                    <span>{{ sprintf('%02d', $i + 5) }}</span>
                    <h3>{{ $service->name }}</h3>
                    <p>{{ $service->short_description }}</p>
                    <i class="fa-solid fa-arrow-right"></i>
                </a>
            @endforeach
        </div>
    @endif
@endif
