if (history.scrollRestoration) {
    history.scrollRestoration = 'manual';
} else {
    window.onbeforeunload = function () {
        window.scrollTo(0, 0);
    }
}

if (window.matchMedia("(min-width: 991px)").matches) {
    function menu(btn) {
        document.getElementById(btn).addEventListener('click', () => {
            const btns = document.getElementById('menu_btn').querySelectorAll('a');

            for (var i = 0; i < btns.length; i++) {
                if (btns[i].id != btn) {
                    btns[i].classList.remove('btn_select');
                }
                else if (btns[i].id == btn) {
                    btns[i].classList.add('btn_select');
                }
            }
        });
    }
    menu('home_btn');
    menu('about_btn');
    menu('projects_btn');
    menu('contact_btn');
}

var i = 0;
var u = 0;
var txt = 'Name : Thomas Aubert';
var txt2 = 'Age: 19 years old   ';
var txt3 = 'Location: Paris, France';
var txt4 = 'Studies: IIM,';
var txt5 = ' A2 DW';
var speed = "50";
var wait = "1500";
var bigWait = "4500";
var littleWait = "1000";

var count = 0;


w1('cursor_name', 'cursor_school', txt, 'myself');
function w1(cursor, cursorNone, text, textCtn) {
    document.getElementById(cursorNone).style.display = "none";
    document.getElementById(cursor).style.display = "inline-block";
    document.getElementById(cursor).classList.toggle('typing');
    if (i < text.length) {

        document.getElementById(textCtn).innerHTML += text.charAt(i);
        i++;

        setTimeout(function () {
            w1(cursor, cursorNone, text, textCtn);
        }, speed);
        if (i == text.length) {
            count += 1;
        }
    }
    else if (count == 1) {
        document.getElementById(cursor).classList.toggle('typing');
        i = 0;
        setTimeout(function () {
            w1('cursor_age', 'cursor_name', txt2, 'myage');
        }, wait);
    }
    else if (count == 2) {
        document.getElementById(cursor).classList.toggle('typing');
        i = 0;
        setTimeout(function () {
            w1('cursor_loc', 'cursor_age', txt3, 'myloc');
        }, wait);
    }
    else if (count == 3) {
        document.getElementById(cursor).classList.toggle('typing');
        i = 0;
        setTimeout(function () {
            w1('cursor_school', 'cursor_loc', txt4, 'myschool');
        }, littleWait);

    }
    else if (count == 4) {
        document.getElementById(cursor).classList.toggle('typing');
        i = 0;
        setTimeout(function () {
            w1('cursor_school', 'cursor_loc', txt5, 'myschool');
        }, littleWait);

    }
    else if (count >= 5) {
        i = 0;
        setTimeout(disappear, bigWait);
    }
}

function disappear() {
    document.getElementById('typingParent').classList.toggle('transparent');
    setTimeout(clear, wait);
}
function clear() {
    document.getElementById('typingParent').classList.toggle('transparent');
    document.getElementById('myself',).innerHTML = "";
    document.getElementById('myage').innerHTML = "";
    document.getElementById('myloc').innerHTML = "";
    document.getElementById('myschool').innerHTML = "";
    count = 0;

    w1('cursor_name', 'cursor_school', txt, 'myself');
}
const scroll_home = document.getElementById('home_btn');
const scroll_about = document.getElementById('about_btn');
const scroll_projects = document.getElementById('projects_btn');
const scroll_contact = document.getElementById('contact_btn');

function scroll(number) {
    window.scrollTo({
        top: number,
        left: 0,
        behavior: "smooth"
    })
}
if (window.matchMedia("(min-width: 991px)").matches) {
    scroll_home.addEventListener('click', function () {
        scroll(0);
    });
    scroll_about.addEventListener('click', function () {
        scroll(333);
    });
    scroll_projects.addEventListener('click', function () {
        scroll(666);
    });
    scroll_contact.addEventListener('click', function () {
        scroll(999);
    });

    document.getElementById('go_top').addEventListener('click', () => {
        scroll(0);
    })
}
else {
    scroll_home.addEventListener('click', function () {
        scroll(0);
    });
    scroll_about.addEventListener('click', function () {
        scroll(800);
    });
    scroll_projects.addEventListener('click', function () {
        scroll(1650);
    });
    scroll_contact.addEventListener('click', function () {
        scroll(2460);
    });

    document.getElementById('go_top').addEventListener('click', () => {
        scroll(0);
    })
}

function about(btn, show, txt) {
    document.getElementById(btn).addEventListener('click', () => {

        const btns = document.getElementById('btn_all').querySelectorAll('div');
        const div = document.getElementById('skills').querySelectorAll('article');
        const text = document.getElementById('description').querySelectorAll('article');
        // const txt = document.getElementById('description').querySelectorAll('article');

        for (var i = 0; i < 3; i++) {

            if (btns[i].id != btn) {
                btns[i].classList.add('btns_skills');
                btns[i].classList.remove('underline');

            }
            if (btns[i].id == btn) {
                btns[i].classList.remove('btns_skills');
                btns[i].classList.add('underline');
            }
            if (div[i].id != show) {
                div[i].classList.add('hidden_sk');
            }
            if (text[i].id != txt) {
                text[i].classList.add('hidden_txt');
            }

            setTimeout(function () {
                for (var u = 0; u < 3; u++) {

                    if (div[u].id == show) {
                        div[u].classList.remove('hidden_sk');
                    }
                    if (text[u].id == txt) {
                        text[u].classList.remove('hidden_txt');
                    }

                }

            }, 400)

        }
    }
    )
}
about('btn_frontend', 'frontend', 'txt_front');
about('btn_backend', 'backend', 'txt_back');
about('btn_others', 'others', 'txt_others');



// Project
function show_p(btn, proj) {
    document.getElementById(btn).addEventListener('click', () => {
        const btns = document.getElementById('proj_btns').querySelectorAll('div');
        const projects = document.getElementById('proj_all').querySelectorAll('article');

        for (var i = 0; i < btns.length; i++) {
            if (btns[i].id != btn) {
                btns[i].classList.remove('btn_select');
            }
            if (btns[i].id == btn) {
                btns[i].classList.add('btn_select');
            }
            if (projects[i].id != proj) {
                projects[i].classList.add('p_hidden');
            }
            if (projects[i].id == proj) {
                projects[i].style.display = "flex";
            }

            setTimeout(function () {
                for (var u = 0; u < projects.length; u++) {
                    if (projects[u].id == proj) {
                        projects[u].style.display = "flex";
                        projects[u].classList.remove('p_hidden');
                    
                    }
                    if (projects[u].id != proj){
                        projects[u].style.display = "none";
                    }
                }

            }, 400);


        }
    })
}

show_p('ea_btn', 'ea');
show_p('pulv_btn', 'pulv');
show_p('pp_btn', 'pp');
show_p('mop_btn', 'mop');



// Projects img lightbox

const proj_img = document.getElementById('img_pulv').querySelectorAll('img');
var img_clone = document.createElement('img');
var black_bck = document.createElement('div');
proj_img.forEach((images => {

    images.addEventListener('click', () => {
        black_bck.classList.add('black_bck');
        img_clone.src = images.src;
        img_clone.classList.add('lightbox');

        document.body.appendChild(black_bck);
        black_bck.appendChild(img_clone);


        black_bck.addEventListener('click', () => {
            document.body.removeChild(black_bck);
        });


    })
}))

