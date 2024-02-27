@php
    $links = [
        [
            'url' => '/character',
            'label' => 'Character',
        ],
        [
            'url' => '/comics',
            'label' => 'Comics',
        ],
        [
            'url' => '/movies',
            'label' => 'Movies',
        ],
        [
            'url' => '/tv',
            'label' => 'Tv',
        ],
        [
            'url' => '/games',
            'label' => 'Games',
        ],
        [
            'url' => '/collectbles',
            'label' => 'Collectbles',
        ],
        [
            'url' => '/videos',
            'label' => 'Videos',
        ],
        [
            'url' => '/fans',
            'label' => 'Fans',
        ],
        [
            'url' => '/news',
            'label' => 'News',
        ],
    ];
@endphp



<header>
    <section>
        <div class="bg-primary text-light d-flex justify-content-end">
            
            <section class="d-flex align-items-center">
                <div class="container d-flex align-items-center justify-content-between">
                       
                    @foreach ($links as $link)
                            <li>
                                <a href="{{$link['url'] }}">
                                    {{$link['label'] }}
                                </a>
                            </li>
                        @endforeach
                </div>
                <span class="mx-5">
                    DC POWER VISA
                </span>
            </section>
        </div>
        

        
    </section>
    <section class="jumbo--container">
    </section>
</header>