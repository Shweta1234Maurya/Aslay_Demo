<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        :root {
            --gap-width: 20px;
            --slide-width: 200px;
            --slide-height: 100px;
            /* --overlay-bg-color: rgba(0, 0, 0, 0.5);*/
            --overlay-text-color: #fff;
            --overlay-transition: opacity 0.3s ease;


        }

        .title {
            justify-content: center;
            text-align: center;
            padding-top: 50px;
        }

        .carousel {
            overflow: hidden;
            width: 100%;
            padding: 50px;
        }

        .carousel-track {
            display: flex;
            gap: var(--gap-width);
            animation: scroll var(--scroll-duration) linear infinite;

        }

        .slide {

            flex: 0 0 var(--slide-width);
            height: var(--slide-height);
            border-radius: var(--border-radius);
            position: relative;


        }

        .slide img {
            max-width: 100%;
            height: 100%;

        }

        .overlay {
            position: absolute;
            bottom: 0;
            /*background: var(--overlay-bg-color);*/
            color: var(--overlay-text-color);
            width: 100%;
            height: 100%;
            opacity: 0;
            transition: var(--overlay-transition);
            border-radius: var(--border-radius);
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .slide:hover .overlay {
            opacity: 1;
        }

        @keyframes scroll {
            0% {
                transform: translateX(0);
            }

            100% {
                transform: translateX(calc(-1 * var(--total-width)));
            }
        }

        .carousel:hover .carousel-track {
            animation-play-state: paused;
        }
    </style>
</head>

<body>
    <div class="title">
        <h1>Supporters/Sponsors</h1>
    </div>
    <div class="carousel" aria-live="polite" aria-label="Image Carousel">
        <div class="carousel-track">
        </div>
    </div>

</body>
<script>
    document.addEventListener('DOMContentLoaded', () => {
        const slidesData = [{
                src: 'images/logos/supporter1.png',
            },
            {
                src: 'images/logos/supporter3.png',
            },
            {
                src: 'images/logos/supporter13.png',
            },
            {
                src: 'images/logos/supporter4.png',
            },
            {
                src: 'images/logos/supporter5.webp',
            },
            {
                src: 'images/logos/supporter6.jpg',
            },
            {
                src: 'images/logos/supporter7.png',
            },
            {
                src: 'images/logos/supporter8.jpg',
            },
            {
                src: 'images/logos/supporter9.png',
            },
            {
                src: 'images/logos/supporter2.png',
            }
        ];

        const carouselTrack = document.querySelector('.carousel-track');

        const createSlide = ({
            src,
            description
        }) => {
            const slideElement = document.createElement('div');
            slideElement.className = 'slide';

            const imgElement = document.createElement('img');
            imgElement.src = src;
            imgElement.alt = description;

            const overlayElement = document.createElement('div');
            overlayElement.className = 'overlay';
            overlayElement.textContent = description;

            slideElement.append(imgElement, overlayElement);

            return slideElement;
        };

        const populateCarouselTrack = (slides) => {
            const fragment = document.createDocumentFragment();
            slides.forEach(slide => fragment.appendChild(createSlide(slide)));

            // Duplicate slides to create a seamless loop effect
            slides.forEach(slide => fragment.appendChild(createSlide(slide)));

            carouselTrack.appendChild(fragment);

            const slideWidth = parseInt(getComputedStyle(document.documentElement).getPropertyValue('--slide-width'));
            const gapWidth = parseInt(getComputedStyle(document.documentElement).getPropertyValue('--gap-width'));
            const totalWidth = (slideWidth + gapWidth) * slides.length;
            const duplicatedTotalWidth = totalWidth * 2;
            const halfTotalWidth = duplicatedTotalWidth / 2;

            carouselTrack.style.setProperty('--total-width', `${halfTotalWidth}px`);

            const baseDuration = 40; // secondes | default = 40
            const baseWidth = 5000; // px | default = 5000
            const scrollDuration = (halfTotalWidth / baseWidth) * baseDuration;

            carouselTrack.style.setProperty('--scroll-duration', `${scrollDuration}s`);
        };

        populateCarouselTrack(slidesData);
    });
</script>

</html>