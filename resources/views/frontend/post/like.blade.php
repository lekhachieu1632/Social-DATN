<div class="d-flex me-4">
    @if($post->like->toArray() == true)
        <a class="like activelike cursor-pointer me-2" id="unlike-post"
           data-bs-id-like="{{ $post->like[0]->id }}"
           data-bs-id-post="{{ $post->id }}"
           data-bs-id-user="{{ session(\App\Setting\Setting_Static::KEY.'-id') }}">
            <svg
                xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink"
                width="23.997"
                height="21.188"
                viewBox="0" >
                <defs>
                    <clipPath id="clip-path">
                        <path
                            id="Clip_2"
                            data-name="Clip
                                                                                                                            2"
                            d="M0,0H24V21.188H0Z"
                            transform="translate(0.003)"
                            fill="none"
                        />
                    </clipPath>
                </defs>
                <g id="like"
                   transform="translate(-0.003)"
                   clip-path="url(#clip-path)">
                    <path
                        id="Fill_1"
                        data-name="Fill1"
                        d="M12,21.188A.749.749,0,0,1,11.506,21C10.471,20.1,9.474,19.247,8.6,18.5,3.419,14.087,0,11.174,0,6.915,0,2.973,2.741,0,6.375,0A5.682,5.682,0,0,1,9.924,1.227,8.083,8.083,0,0,1,12,3.724a8.084,8.084,0,0,1,2.076-2.5A5.682,5.682,0,0,1,17.625,0C21.259,0,24,2.973,24,6.915c0,4.259-3.419,7.173-8.595,11.583-.88.75-1.876,1.6-2.911,2.5a.749.749,0,0,1-.494.185"
                    />
                </g>
            </svg>
        </a>
    @else
        <a class="like cursor-pointer me-2" id="like-post"
           data-bs-id-post="{{ $post->id }}"
           data-bs-id-user="{{ session(\App\Setting\Setting_Static::KEY.'-id') }}">
            <svg
                xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink"
                width="23.997"
                height="21.188"
                viewBox="0" >
                <defs>
                    <clipPath id="clip-path">
                        <path
                            id="Clip_2"
                            data-name="Clip
                                                                                                                            2"
                            d="M0,0H24V21.188H0Z"
                            transform="translate(0.003)"
                            fill="none"
                        />
                    </clipPath>
                </defs>
                <g id="like"
                   transform="translate(-0.003)"
                   clip-path="url(#clip-path)">
                    <path
                        id="Fill_1"
                        data-name="Fill1"
                        d="M12,21.188A.749.749,0,0,1,11.506,21C10.471,20.1,9.474,19.247,8.6,18.5,3.419,14.087,0,11.174,0,6.915,0,2.973,2.741,0,6.375,0A5.682,5.682,0,0,1,9.924,1.227,8.083,8.083,0,0,1,12,3.724a8.084,8.084,0,0,1,2.076-2.5A5.682,5.682,0,0,1,17.625,0C21.259,0,24,2.973,24,6.915c0,4.259-3.419,7.173-8.595,11.583-.88.75-1.876,1.6-2.911,2.5a.749.749,0,0,1-.494.185"
                    />
                </g>
            </svg>
        </a>
    @endif
    <span>{{ $post->likes == 0 ? '' : $post->likes }}</span>
</div>
