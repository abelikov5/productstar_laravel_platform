// ui меню
let div_line = document.querySelectorAll('.div_line');
let div_line_wrap = document.querySelector('.div_line_wrap');

localStorage.setItem('show_menu', 1);

div_line_wrap.addEventListener('click', () => hide_menu());

document.querySelector('.main_menu').addEventListener("mouseover", () => catalog_menu());
document.querySelector('.dark_side_menu').addEventListener("mouseover", () => hide_menu());

function catalog_menu() {
    if (localStorage.getItem('show_menu')) {
        document.querySelector('.catalog_menu').classList.add('cat_menu_active');
        document.querySelector('.dark_side_menu').classList.remove('d_none');
        //
        div_line[0].classList.add('cross_ui_top');
        div_line[1].classList.add('cross_ui_middle');
        div_line[2].classList.add('cross_ui_botton');
    }
}
function hide_menu() {
    localStorage.setItem('show_menu', 0);
    document.querySelector('.catalog_menu').classList.remove('cat_menu_active');
    document.querySelector('.dark_side_menu').classList.add('d_none');

    div_line[0].classList.remove('cross_ui_top');
    div_line[1].classList.remove('cross_ui_middle');
    div_line[2].classList.remove('cross_ui_botton');
}



