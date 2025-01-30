import { getUserProfilePhoto } from './await-js.js';
// localStorage.clear();

let goLoading = 0;
let goProgflake = false;
let OpenheaderOnOff = true;

const body = document.querySelector('body');

const headerOnOff = document.querySelector('.on-off');
const On = document.querySelector('.on-off .on');
const Off = document.querySelector('.on-off .off');
const runner = document.querySelector('.on-off .runner');

const loading = document.querySelector('.loading-anim');
const lamp = document.querySelector('.lamp');
const light = document.querySelector('.lamp-light');
const names = document.querySelector('.name-sayt');


headerOnOff.addEventListener('click', () => {
    if (OpenheaderOnOff) {
        OpenheaderOnOff = false;

        body.classList.toggle('change');

        On.classList.toggle('open_on-off');
        Off.classList.toggle('open_on-off');
        runner.classList.toggle('open_on-off');

        loading.classList.toggle('open_light');
        lamp.classList.toggle('open_light');
        light.classList.toggle('open_light');
        names.classList.toggle('open_light');

        if (goLoading == 0) {

            goProgflake = true;
            goLoading = 1;
        }
        else {

            goProgflake = false;
            goLoading = 0;
        }
        setTimeout(() => {
            getUserProfilePhoto();
            changePage()

            if (goLoading == 1) {
                setTimeout(() => {
                    if (goLoading == 1) {
                        setTimeout(() => {
                            if (goLoading == 1) {
                                setTimeout(() => {
                                    if (goLoading == 1) {
                                        // changePage()
                                        window.location.href = 'second.html'
                                        // window.location.href = 'second.php'


                                        setTimeout(() => {
                                            body.classList.toggle('change');

                                            On.classList.toggle('open_on-off');
                                            Off.classList.toggle('open_on-off');
                                            runner.classList.toggle('open_on-off');

                                            loading.classList.toggle('open_light');
                                            lamp.classList.toggle('open_light');
                                            light.classList.toggle('open_light');
                                            names.classList.toggle('open_light');


                                            goProgflake = false;
                                            goLoading = 0;
                                        }, 1000)
                                    }
                                }, 700)
                            }
                        }, 700)
                    }
                }, 700)
            }
        }, 700)

        setTimeout(() => {
            OpenheaderOnOff = true;
        }, 1000)

    }

})

// Предварительная загрузка второго файла

function changePage() {
    fetch('second.html')
        .then(response => response.text())
        .then(data => {
            // Сохраняем данные в локальное хранилище или кэш
            localStorage.setItem('secondPageContent', data);
        })
        .catch(error => console.error('Ошибка загрузки:', error));
}


// function changePage() {
//     // window.location.href = 'second.html'

//     // Начинаем предварительную загрузку ресурсов
//     const videoUrl = 'style/Glass-Cube.mp4';
//     // const imgUrl = 'path/to/image.jpg';

//     const video = document.createElement('video');
//     video.src = videoUrl;
//     video.preload = 'auto'; // Предварительная загрузка видео

//     // const img = new Image();
//     // img.src = imgUrl; // Предварительная загрузка изображения


//     // fetch('second.html')
//     //     .then(response => response.text())
//     //     //
//     //     .then(data => {
//     //         document.getElementById('secondPageContent').innerHTML = data;
//     //     })
//     //     //
//     //     .catch(error => console.error('Ошибка загрузки:', error));

// }








// const burger = document.querySelector('.burger');

// function scrollHeight(){
//     document.body.style.height = 1688+"px";
//     document.body.style.position = "absolute";
//     window.scrollTo({
//         top: document.body.scrollHeight,behavior:'smooth'//плавная прокрутка вниз
//     })
//     setTimeout(()=>{
//         document.body.style.top = -844 +'px';
//         document.body.style.position = "fixed";

//     },1000)
// }



////////

function createProgflake1() {

    const progflake = document.createElement('div');
    progflake.className = 'flake1';
    // прекращаем работу функции
    if (!goProgflake) {
        clearInterval();
        return;
    }
    progflake.style.color = '#d1d1d1';
    progflake.style.zIndex = 50;
    progflake.style.opacity = 0.2;
    progflake.textContent = '⚫';

    progflake.style.left = Math.random() * (226 - 108) + 108 + 'px';//рандомное пололжение относительно окна
    progflake.style.fontSize = Math.random() * (4 - 2) + 2 + 'px'; // Рандомный размер
    progflake.style.animationDuration = Math.random() * (5 - 3) + 3 + 's'; // Рандомная скорость взлета
    document.body.append(progflake);

    setTimeout(() => {
        progflake.remove();
    }, parseFloat(progflake.style.animationDuration) * 1000);//продолжительность полета
}


function createProgflake2() {

    const progflake = document.createElement('div');
    progflake.className = 'flake2';
    // прекращаем работу функции
    if (!goProgflake) {
        clearInterval();
        return;
    }
    progflake.style.color = '#d1d1d1';
    progflake.style.zIndex = 50;
    progflake.style.opacity = 0.2;
    progflake.textContent = '⚫';

    // progflake.textContent = '▫';

    progflake.style.left = Math.random() * (220 - 108) + 108 + 'px';//рандомное пололжение относительно окна
    progflake.style.fontSize = Math.random() * (4 - 2) + 2 + 'px'; // Рандомный размер
    progflake.style.animationDuration = Math.random() * (5 - 3) + 3 + 's'; // Рандомная скорость взлета
    document.body.append(progflake);

    setTimeout(() => {
        progflake.remove();
    }, parseFloat(progflake.style.animationDuration) * 1000);//продолжительность полета
}

//вызов функции с определенной частотой появления слов 
setInterval(createProgflake1, 150);
setInterval(createProgflake2, 150);



// window.addEventListener('resize', () => {
//     lowerWindow();
// })



function lowerWindow() {
    const lowerShadow = document.querySelector('.lower-shadow');
    lowerShadow.style.top = window.innerHeight - 100 + 'px';
}
lowerWindow();



// document.addEventListener('touchstart', function (event) {
//     if (event.touches.length > 1) {
//         event.preventDefault();
//     }
// });
// document.addEventListener('touchend', function (event) {
//     if (event.touches.length > 1) {
//         event.preventDefault();
//     }
// });



// Предотвращаем зумирование

document.addEventListener('gesturestart', (event) => {
    event.preventDefault();
});
