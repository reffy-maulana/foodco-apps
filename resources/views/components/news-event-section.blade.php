<section class="light">
    <style>
        .light {
            background-color: #f8f9fa;
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

        .postcard .postcard__img {
            object-fit: cover;
            width: 100%;
            height: auto;
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
                max-width: 400px;
                max-height: 100%;
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

        @media screen and (max-width: 768px) {
            .postcard .postcard__img {
                max-width: 100%;
            }
        }

        @media screen and (min-width: 1024px) {
            .postcard .postcard__text {
                padding: 2rem 3.5rem;
            }
        }
    </style>
</section>