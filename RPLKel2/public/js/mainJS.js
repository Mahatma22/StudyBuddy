const hamburger = document.querySelector('#button-navbar');
const sidebarItems = document.querySelectorAll('.sidebar-item');

function removeActiveClassFromAll() {
    sidebarItems.forEach(item => {
        item.classList.remove('sidebar-active');
    });
}

sidebarItems.forEach(item => {
    item.onclick = () => {
        removeActiveClassFromAll();
        item.classList.toggle('sidebar-active');
    };
});



hamburger.onclick = ()=>document.querySelector('#sidebar').classList.toggle('expand');


