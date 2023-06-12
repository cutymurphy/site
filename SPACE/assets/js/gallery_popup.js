const popup = document.querySelector('.popup');
const popupImage = popup.querySelector('.popup-image');
const closeBtn = popup.querySelector('.close');
const linkBtn = popup.querySelector('.icon');
const images = document.querySelectorAll('.popup-image');

let currentLink = '';

images.forEach(image => {
	const link = image.dataset.link;
	image.addEventListener('click', () => {
		popupImage.src = image.src;
		currentLink = link;
		popup.style.display = 'flex';
	});
});

closeBtn.addEventListener('click', () => {
	popup.style.display = 'none';
});

linkBtn.addEventListener('click', () => {
	window.open(currentLink);
});