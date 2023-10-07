function data() {
    return {
        isSideMenuOpen: false,
        toggleSideMenu() {
            this.isSideMenuOpen = !this.isSideMenuOpen;
        },
        closeSideMenu() {
            this.isSideMenuOpen = false;
        },
        isPagesMenuOpen: false,
        togglePagesMenu() {
            this.isPagesMenuOpen = !this.isPagesMenuOpen;
        },

        isMenu1Open: false,
        isMenu2Open: false,
        toggleMenu(menuNumber) {
            if (menuNumber === 1) {
                this.isMenu1Open = !this.isMenu1Open;
            } else if (menuNumber === 2) {
                this.isMenu2Open = !this.isMenu2Open;
            }
        },
    };
}
