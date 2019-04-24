if (document.querySelector('.home.blog')) {
	document.addEventListener('DOMContentLoaded', () => {
		loadMore();
		modalWindows();
	});
}

function loadMore() {
	const LOAD_MORE_BTN = document.querySelector('.load-more.button');
	const POST_CONTAINER = document.querySelector('.post-container');
	const PAGES_NUM = Math.ceil(enqueuedData.postsNum / 6);
	const NONCE = document
		.getElementById('__load_more_posts_nonce')
		.getAttribute('value');

	let isLoading = false;
	let requestedPage = 3;

	LOAD_MORE_BTN.addEventListener('click', e => {
		e.preventDefault;
		requestData();
	});

	function htmlToElements(html) {
		let template = document.createElement('template');
		template.innerHTML = html;

		return template.content.childNodes;
	}

	function postOperations() {
		requestedPage++;
		isLoading = false;
		LOAD_MORE_BTN.classList.remove('is-loading');
		modalWindows();

		if (requestedPage > PAGES_NUM) {
			LOAD_MORE_BTN.classList.add('hide');
		}
	}

	function appendPosts(posts) {
		setTimeout(() => {
			posts.forEach(post => {
				POST_CONTAINER.appendChild(post.cloneNode(true));
			});

			postOperations();
		}, 1500);
	}

	function requestData() {
		if (isLoading) return;
		if (requestedPage > PAGES_NUM) return;

		isLoading = true;
		LOAD_MORE_BTN.classList.add('is-loading');

		let params = new URLSearchParams({
			action: 'load_more_posts',
			nonce: NONCE,
			requested_page: requestedPage
		});

		fetch(enqueuedData.ajaxUrl, {
			method: 'POST',
			headers: {
				'Content-Type': 'application/x-www-form-urlencoded; charset=UTF-8'
			},
			body: params.toString()
		})
			.then(res => res.text())
			.then(data => appendPosts(htmlToElements(data)))
			.catch(err => console.log(err));
	}
}

function modalWindows() {
	let openedModalId = '';
	let overlayListener = false;
	let articleTiles = document.querySelectorAll(
		'.grid-tile > article:not(.click-listener)'
	);

	const pageOverlay = document.getElementById('page-overlay');

	const openModalWindow = (article) => {
		let el = article.querySelector('div.modal-window');

		pageOverlay.classList.add('active');
		el.classList.add('active');
		openedModalId = el.id;
	};

	window.closeModalWindow = () => {
		document.getElementById(openedModalId).classList.remove('active');
		pageOverlay.classList.remove('active');
	};

	(function() {
		if (overlayListener) return;

		overlayListener = true;
		pageOverlay.addEventListener('click', closeModalWindow);
	})();

	articleTiles.forEach(article => {
		article.addEventListener('click', () => openModalWindow(article), true);
		article.classList.add('click-listener');
	});
}
