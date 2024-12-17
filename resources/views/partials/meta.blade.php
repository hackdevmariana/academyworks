<meta charset="{{ $metaTags->charset ?? 'utf-8' }}">
<meta name="keywords" content="{{ $metaTags->meta_keywords ?? '' }}" />
<meta name="author" content="{{ $metaTags->author ?? '' }}" />
<meta name="robots" content="{{ $metaTags->robots ?? 'index, follow' }}" />
<meta name="referrer" content="{{ $metaTags->referrer ?? 'origin' }}" />
<meta name="description" content="{{ $metaTags->meta_description ?? 'Default description' }}" />
<link rel="canonical" href="{{ $metaTags->canonical ?? url('/') }}" />

<!-- OG -->
<meta property="og:title" content="{{ $metaTags->og_title ?? '' }}" />
<meta property="og:description" content="{{ $metaTags->og_description ?? '' }}" />
<meta property="og:image" content="{{ $metaTags->og_image ?? '' }}" />
<meta property="og:type" content="{{ $metaTags->og_type ?? 'website' }}" />
<meta property="og:url" content="{{ $metaTags->og_url ?? url('/') }}" />
<meta property="og:site_name" content="{{ $metaTags->og_site_name ?? '' }}" />
<meta property="og:locale" content="{{ $metaTags->og_locale ?? 'en_US' }}" />

<!-- Twitter -->
<meta name="twitter:card" content="{{ $metaTags->twitter_card ?? 'summary_large_image' }}" />
<meta name="twitter:title" content="{{ $metaTags->twitter_title ?? '' }}" />
<meta name="twitter:description" content="{{ $metaTags->twitter_description ?? '' }}" />
<meta name="twitter:image" content="{{ $metaTags->twitter_image ?? '' }}" />
<meta name="twitter:site" content="{{ $metaTags->twitter_site ?? '' }}" />
<meta name="twitter:creator" content="{{ $metaTags->twitter_creator ?? '' }}" />

<!-- Schema -->
<meta itemprop="name" content="{{ $metaTags->schema_name ?? '' }}">
<meta itemprop="description" content="{{ $metaTags->schema_description ?? '' }}">
<meta itemprop="image" content="{{ $metaTags->schema_image ?? '' }}">
