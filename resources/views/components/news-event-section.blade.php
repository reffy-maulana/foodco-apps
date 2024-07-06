<!-- resources/views/components/news-event-section.blade.php -->

<section class="light">
    <style>
        .light {
            background: #f3f5f7;
        }

        .postcard {
            flex-wrap: wrap;
            display: flex;
            box-shadow: 0 4px 21px -12px rgba(0, 0, 0, 0.66);
            border-radius: 10px;
            margin: 0 0 2rem 0;
            overflow: hidden;
            position: relative;
            color: #ffffff;
        }

        .postcard.light {
            background-color: #e1e5ea;
        }

        .postcard .postcard__text {
            padding: 1.5rem;
            display: flex;
            flex-direction: column;
        }

        .postcard .postcard__title {
            font-size: 1.75rem;
            margin-bottom: 0.5rem;
            font-weight: 500;
            line-height: 1.2;
        }

        .postcard .postcard__bar {
            width: 50px;
            height: 10px;
            margin: 10px 0;
            border-radius: 5px;
            background-color: #424242;
            transition: width 0.2s ease;
        }

        .postcard .postcard__preview-txt {
            overflow: hidden;
            text-overflow: ellipsis;
            text-align: justify;
        }

        .postcard .postcard__tagbox {
            display: flex;
            flex-flow: row wrap;
            font-size: 14px;
            margin: 20px 0 0 0;
            justify-content: center;
        }

        .postcard .postcard__tagbox .tag__item {
            display: inline-block;
            background: rgba(83, 83, 83, 0.4);
            border-radius: 3px;
            padding: 2.5px 10px;
            margin: 0 5px 5px 0;
            cursor: default;
            user-select: none;
            transition: background-color 0.3s;
        }

        .postcard .postcard__tagbox .tag__item:hover {
            background: rgba(83, 83, 83, 0.8);
        }

        .postcard .blue .postcard__title:hover,
        .postcard .blue .postcard__bar {
            background-color: #0076bd;
        }

        .postcard .red .postcard__title:hover,
        .postcard .red .postcard__bar {
            background-color: #bd150b;
        }

        .postcard .green .postcard__title:hover,
        .postcard .green .postcard__bar {
            background-color: #79dd09;
        }

        .postcard .yellow .postcard__title:hover,
        .postcard .yellow .postcard__bar {
            background-color: #bdbb49;
        }

        @media screen and (min-width: 769px) {
            .postcard {
                flex-wrap: inherit;
            }

            .postcard .postcard__title {
                font-size: 2rem;
            }

            .postcard .postcard__text {
                padding: 3rem;
                width: 100%;
            }

            .postcard .postcard__img {
                max-width: 300px;
                transition: transform 0.3s ease;
            }

            .postcard:hover .postcard__img {
                transform: scale(1.1);
            }

            .postcard:nth-child(2n+1) {
                flex-direction: row;
            }

            .postcard:nth-child(2n+0) {
                flex-direction: row-reverse;
            }
        }

        @media screen and (min-width: 1024px) {
            .postcard .postcard__text {
                padding: 2rem 3.5rem;
            }
        }
    </style>

    <div class="container py-2">
        <div class="h1 text-center text-gradient fw-bold mb-5" id="pageHeaderTitle">News & Events</div>
        
        <article class="postcard bg-white blue">
            <a class="postcard__img_link" href="#">
                <img class="postcard__img" src="https://picsum.photos/1000/1000" alt="Image Title" />
            </a>
            <div class="postcard__text t-dark">
                <h1 class="postcard__title"><a class="text-black text-decoration-none" href="#">Podcast Title</a></h1>
                <div class="postcard__subtitle small">
                    <time class="text-black" datetime="2020-05-25 12:00:00">
                        <i class="fas fa-calendar-alt mr-2"></i>Mon, May 25th 2020
                    </time>
                </div>
                <div class="postcard__bar"></div>
                <div class="postcard__preview-txt text-black">Lorem ipsum dolor sit amet consectetur adipisicing elit...</div>
                <ul class="postcard__tagbox">
                    <li class="tag__item"><i class="fas fa-tag mr-2"></i>Podcast</li>
                    <li class="tag__item"><i class="fas fa-clock mr-2"></i>55 mins.</li>
                    <li class="tag__item play blue">
                        <a href="#"><i class="fas fa-play mr-2"></i>Play Episode</a>
                    </li>
                </ul>
            </div>
        </article>

        <article class="postcard bg-white red">
            <a class="postcard__img_link" href="#">
                <img class="postcard__img" src="https://picsum.photos/501/500" alt="Image Title" />	
            </a>
            <div class="postcard__text t-dark">
                <h1 class="postcard__title red"><a class="text-black text-decoration-none" href="#">Podcast Title</a></h1>
                <div class="postcard__subtitle small">
                    <time class="text-black" datetime="2020-05-25 12:00:00">
                        <i class="fas fa-calendar-alt mr-2"></i>Mon, May 25th 2020
                    </time>
                </div>
                <div class="postcard__bar"></div>
                <div class="postcard__preview-txt text-black">Lorem ipsum dolor sit amet consectetur adipisicing elit...</div>
                <ul class="postcard__tagbox">
                    <li class="tag__item"><i class="fas fa-tag mr-2"></i>Podcast</li>
                    <li class="tag__item"><i class="fas fa-clock mr-2"></i>55 mins.</li>
                    <li class="tag__item play red">
                        <a href="#"><i class="fas fa-play mr-2"></i>Play Episode</a>
                    </li>
                </ul>
            </div>
        </article>

        <article class="postcard bg-white green">
            <a class="postcard__img_link" href="#">
                <img class="postcard__img" src="https://picsum.photos/500/501" alt="Image Title" />
            </a>
            <div class="postcard__text t-dark">
                <h1 class="postcard__title green"><a class="text-black text-decoration-none" href="#">Podcast Title</a></h1>
                <div class="postcard__subtitle small">
                    <time class="text-black" datetime="2020-05-25 12:00:00">
                        <i class="fas fa-calendar-alt mr-2"></i>Mon, May 25th 2020
                    </time>
                </div>
                <div class="postcard__bar"></div>
                <div class="postcard__preview-txt text-black">Lorem ipsum dolor sit amet consectetur adipisicing elit...</div>
                <ul class="postcard__tagbox">
                    <li class="tag__item"><i class="fas fa-tag mr-2"></i>Podcast</li>
                    <li class="tag__item"><i class="fas fa-clock mr-2"></i>55 mins.</li>
                    <li class="tag__item play green">
                        <a href="#"><i class="fas fa-play mr-2"></i>Play Episode</a>
                    </li>
                </ul>
            </div>
        </article>
    </div>
</section>
