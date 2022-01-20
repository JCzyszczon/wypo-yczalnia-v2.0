/* Google Fonts */
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800&display=swap');

*{
    font-family: 'Poppins', sans-serif;
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    list-style: none;
    text-decoration: none;
    scroll-padding-top: 2rem;
    scroll-behavior: smooth;

}

:root{
    --main-color: #ff2c1f;
    --text-color: #020307;
    --bg-color: #fff;
}

html::-webkit-scrollbar{
    width: 0.5rem;
    background: var(--text-color);

}

html::-webkit-scrollbar-thumb{
    background: var(--main-color);
    border-radius: 5rem;
}

body{
    background-color: var(--text-color);
    color: var(--bg-color);

}

section{
    padding: 4.5rem 0 1.5rem;
}

header{
    position: fixed;
    width: 100%;
    top: 0;
    right: 0;
    z-index: 1000;
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 20px 100px;
    transition: 0.5s;
    /*background-color: var(--main-color);*/
}

header.shadow{
    background: var(--text-color);
    box-shadow: 0 0 4px rgb(14 55 54 / 15%);
}

.logo{
    font-size: 1.65rem;
    font-weight: 600;
    color: var(--bg-color);
    display: flex;
    align-items: center;
    column-gap: 0.5rem;
}

.logo .bx{
    font-size: 29px;
    color: var(--main-color);
}

.navbar{
    display: flex;
    column-gap: 5rem;
}

.navbar li{
    position: relative;
}

.navbar a{
    font-size: 1rem;
    font-weight: 500;
    color: var(--bg-color);
}

.navbar a::after{
    content: "";
    width: 0;
    height: 2px;
    background-color: var(--main-color);
    position: absolute;
    bottom: -2px;
    left: 0;
    transition: 0.3s all linear;
}

.navbar a:hover::after{
    width: 100%;
}

#menu-icon{
    font-size: 24px;
    cursor: pointer;
    z-index: 10000001;
    display: none;
}

.btn1{
    padding: 0.7rem 1.4rem;
    background-color: var(--main-color);
    color: var(--bg-color);
    font-weight: 400;
    border-radius: 0.5rem;
    justify-content: none;
    align-items: none;
    position: relative;
    left: 50;
}

.btn2{
    padding: 0.7rem 1.4rem;
    background-color: var(--main-color);
    color: var(--bg-color);
    font-weight: 400;
    border-radius: 0.5rem;
    margin-left: 0;
    justify-content: none;
    align-items: none;
}

.btn1:hover{
    background-color: #fa1216;
    border: #fff;
}

.btn2:hover{
    background-color: #fa1216;
}

.text{
    background-color: #ffffff;
    display: flex;
    align-items: center;
    border-radius: 25px;
    padding: 0 10px;
}

.bx{
    color: #121212;
    font-size: 28px;
    padding-top: 5px;
}

.search_bar{
    font-size: 1rem;
    padding: 0 10px;
    border: none;
    outline: none;
    background: none;
    width: 100%;
} 

.container{
    width: 100%;
    min-height: 640px;
    position: relative;
    display: flex;
    align-items: center;
    background: rgb(2,3,7,0.4);
}

.container img{
    position: absolute;
    width: 100%;
    height: 100%;
    object-fit: cover;
    object-position: center;
    z-index: -1;
}

.swiper-pagination-bullet{
    width: 6px !important;
    height: 6px !important;
    border-radius: 0.2rem !important;
    background: var(--bg-color) !important;
    opacity: 1 !important;
}

.swiper-pagination-bullet-active{
    width: 1.5rem !important;
    background: var(--main-color) !important;
}

.home-text{
    z-index: 1000;
    padding: 0 150px;
}

.home-text span{
    color: var(--bg-color);
    font-weight: 500;
    text-transform: uppercase;    
}

.home-text h1{
    color: var(--bg-color);
    font-size: 4rem;
    font-weight: 700;
    margin-bottom: 1rem;
}

.btn3{
    position: absolute;
    bottom: 28%;
    padding: 0.7rem 1.4rem;
    background-color: var(--main-color);
    color: var(--bg-color);
    font-weight: 400;
    border-radius: 0.5rem;
    letter-spacing: 5px;
    text-transform: uppercase;
}

.btn3:hover{
    background-color: #fa1216;
}

.shop{
    position: absolute;
    left: 20rem;
    bottom: 27%;
}

.shop .bx{
    background: var(--bg-color);
    padding: 10px;
    font-size: 2rem;
    border-radius: 50%;
    border: 4px solid rgb(2,3,7,0.4);
    color: var(--main-color);

}

.shop .bx:hover{
    background: var(--main-color);
    color: var(--bg-color);
    transition: 0.2s all linear;
}

.heading{
    max-width: 1800px;
    margin-right: auto;
    margin-left: auto;
    font-size: 2rem;
    font-weight: 500;
    text-transform: uppercase;
    border-bottom: 1px solid var(--main-color);
    margin-top: 1rem;
} 

/*.movies-container{
    max-width: 1200px;
    margin-right: auto;
    margin-left: auto;
    display: grid;
    grid-template-columns: repeat(auto-fit,minmax(180px,auto));
    gap: 1.2rem;
    margin-top: 2.3rem;
} */

.box .box-img{
    width: 100%;
    height: 420px;
}

.box .box-img img{
    width: 100%;
    height: 100%;
    object-fit: cover;
}


.box h3{
    font-size: 1.2rem;
    font-weight: 500;
}

.box span{
    font-size: 13px;
}

.popular-series-container{
    display: grid;
    gap: 1rem;
    max-width: 1600px;
    margin-right: auto;
    margin-left: auto;
    margin-top: 2rem;
}

.popular-series-container .box-img img:hover{
    transform: translateY(-10);
}

.popular-series-container .box{
    width: 100px;
} 

.swiper-button-next{
    color: var(--main-color) !important;
    font-weight: 900 !important;
}

.swiper-button-prev{
    color: var(--main-color) !important;
    font-weight: 900 !important;
}

.red{
    color: var(--main-color);
}


.box:hover .movie-list-item-desc,
.box:hover .btn4,
.box:hover .shop2
{
    opacity: 0.85;
}

.movie-list-item-desc{
    background-color: #333;
    padding: 10px;
    font-size: 14px;
    font-weight: bold;
    position: absolute;
    top: 30%;
    left: 30px;
    width: 250px;
    opacity: 0;
    transition: 0.3s all ease-in-out;
}

.btn4{
    position: absolute;
    bottom: 24%;
    left: 28px;
    padding: 0.7rem 1.4rem;
    background-color: var(--main-color);
    color: var(--bg-color);
    font-weight: 400;
    border-radius: 0.5rem;
    letter-spacing: 3px;
    text-transform: uppercase;
    opacity: 0;
}

.btn4:hover{
    background-color: #fa1216;
}

.shop2{
    position: absolute;
    left: 180px;
    bottom: 23%;
    opacity: 0;
}

.shop2 .bx{
    background: var(--bg-color);
    padding: 10px;
    font-size: 2rem;
    border-radius: 50%;
    border: 4px solid rgb(2,3,7,0.4);
    color: var(--main-color);

}

.shop2 .bx:hover{
    background: var(--main-color);
    color: var(--bg-color);
    transition: 0.2s all linear;
}

.footer{
    margin-top: 50px;
    max-width: 1800px;
    margin-left: auto;
    margin-right: auto;
    display: flex;
    justify-content: space-between;
}

.info{
    display: flex;
}

.info a{
    color: var(--bg-color);
    margin-left: 100px;
    font-size: 1.3rem;
}

.info a:hover{
    text-decoration: underline;
    color: var(--main-color);
}

.social{
    display: flex;
    align-items: center;
    column-gap: 0.5rem;
}

.social .bx{
    background: var(--bg-color);
    padding: 2px;
    font-size: 2rem;
    border-radius: 50%;
    border: 4px solid rgb(2,3,7,0.4);
    color: var(--main-color);
}

.social .bx:hover{
    background: var(--main-color);
    color: var(--bg-color);
    transition: 0.2s all linear;
}

.copyright{
    margin-top: 30px;
    padding: 20px;
    text-align: center;
    color: var(--bg-color);
}

.shop1{
    justify-content: none;
    align-items: none;
    position: relative;
    left: 50;


}

.shop1 .bx{
    background: var(--bg-color);
    padding: 10px;
    font-size: 2rem;
    border-radius: 50%;
    border: 4px solid rgb(2,3,7,0.4);
    color: var(--main-color);

}

.shop1 .bx:hover{
    background: var(--main-color);
    color: var(--bg-color);
    transition: 0.2s all linear;
}

