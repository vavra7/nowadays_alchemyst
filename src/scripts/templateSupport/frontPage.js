if (document.querySelector('.home.blog')) {
	document.addEventListener('DOMContentLoaded', () => {
		loadMore();
	});
}

function loadMore() {
	const LOAD_MORE_BTN = document.querySelector('.load-more.button');
	const POST_CONTAINER = document.querySelector('.post-container');
	const NONCE = document
		.getElementById('__load_more_posts_nonce')
		.getAttribute('value');

	let isLoading = false;
	let requestedPage = 3;

	LOAD_MORE_BTN.addEventListener('click', () => {
		requestData();
	});

	function htmlToElements(html) {
		let template = document.createElement('template');
		template.innerHTML = html;

		return template.content.childNodes;
	}

	function appendPosts(posts) {
		posts.forEach(post => {
			POST_CONTAINER.appendChild(post.cloneNode(true));
		});

		requestedPage++;
		isLoading = false;
	}

	function requestData() {
		if (!isLoading) {
			isLoading = true;

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
}
