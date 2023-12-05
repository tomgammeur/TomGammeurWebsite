function toggleLike(btn) {
  btn.classList.toggle('liked');

  const likeAnimation = btn.nextElementSibling;
  likeAnimation.style.display = 'block';
  setTimeout(() => {
    likeAnimation.style.display = 'none';
  }, 500);
}
function toggleLike(btn) {
  btn.classList.toggle('liked');

  const likeAnimation = btn.nextElementSibling;
  likeAnimation.style.display = 'block';
  setTimeout(() => {
    likeAnimation.style.display = 'none';
  }, 500);
}
// Contrôle pour cacher la vidéo après la lecture ou une durée spécifique
const video = document.getElementById('video');
const videoContainer = document.getElementById('video-container');

video.addEventListener('ended', () => {
  // Cache la vidéo lorsque la lecture est terminée
  videoContainer.style.display = 'none';
  // Ajoutez ici le code pour rediriger l'utilisateur vers la page principale du site, par exemple :
  // window.location.href = 'page_principale.html';
});

// Ou pour cacher la vidéo après un certain délai (par exemple, 5 secondes)
setTimeout(() => {
  videoContainer.style.display = 'none';
  // Ajoutez ici le code pour rediriger l'utilisateur vers la page principale du site, par exemple :
  // window.location.href = 'page_principale.html';
}, 5000); // 5000 millisecondes = 5 secondes
