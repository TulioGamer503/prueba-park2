function toggleMenu() {
    const menuContent = document.getElementById('menu-content');
    if (menuContent.style.display === 'block') {
        menuContent.style.display = 'none';
    } else {
        menuContent.style.display = 'block';
    }
}

function showSection(sectionId) {
    const sections = document.getElementsByClassName('menu-section');
    for (let section of sections) {
        section.style.display = 'none';
    }
    const selectedSection = document.getElementById(sectionId);
    selectedSection.style.display = 'block';
}
