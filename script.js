function toggleLike(btn) {
  btn.classList.toggle('liked');

  const likeAnimation = btn.nextElementSibling;
  likeAnimation.style.display = 'block';
  setTimeout(() => {
    likeAnimation.style.display = 'none';
  }, 500);
}
