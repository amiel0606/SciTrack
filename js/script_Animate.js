function shuffleArray(array) {
    for (let i = array.length - 1; i > 0; i--) {
        const j = Math.floor(Math.random() * (i + 1));
        [array[i], array[j]] = [array[j], array[i]];
    }
}

document.addEventListener('DOMContentLoaded', function() {
    const images = document.querySelectorAll('.drifting-img');
    const container = document.querySelector('.floating-container');
    const containerWidth = container.clientWidth;
    const containerHeight = container.clientHeight;

    const imgSize = 300; 
    const margin = 10; 

    const shuffledImages = Array.from(images);
    shuffleArray(shuffledImages);

    const cols = Math.ceil(containerWidth / (imgSize + margin));
    const rows = Math.ceil(containerHeight / (imgSize + margin));

    shuffledImages.forEach((img, index) => {
        const col = index % cols;
        const row = Math.floor(index / cols);

        const startX = col * (imgSize + margin) - margin;
        const startY = row * (imgSize + margin) - margin;

        img.style.width = imgSize + 'px';
        img.style.left = startX + 'px';
        img.style.top = startY + 'px';

        img.style.maxWidth = 'none';
        img.style.maxHeight = 'none';

        img.style.animation = `drift ${Math.random() * 20 + 20}s infinite linear`;

        img.style.transform = `translate(${Math.random() * containerWidth}px, ${Math.random() * containerHeight}px)`;
    });
});
