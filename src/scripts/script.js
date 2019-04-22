import frontPage from './templateSupport/frontPage';

document.addEventListener('DOMContentLoaded', () => {
	const MENU_TOGGLE_BUTTON = document.getElementById('menu-toggle-button');
	const MENU_CLOSE_BUTTON = document.getElementById('menu-close-button');
	const MAIN_SIDEBAR = document.getElementById('main-sidebar');

	MENU_TOGGLE_BUTTON.addEventListener('click', () =>
		MAIN_SIDEBAR.classList.toggle('active')
	);

	MENU_CLOSE_BUTTON.addEventListener('click', () =>
		MAIN_SIDEBAR.classList.remove('active')
	);
});
