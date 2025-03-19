const API_KEY = '6285896b'; // Clé API OMDb
const API_URL = `https://www.omdbapi.com/?apikey=${API_KEY}&type=movie`;
const moviesContainer = document.getElementById('moviesContainer');
const loadMoreBtn = document.getElementById('load-more-btn');
console.log(moviesContainer);   
console.log(loadMoreBtn);
console.log('message: ')
let currentPage = 1; // Suivi des pages pour le bouton Charger plus

// Fonction pour charger les films
async function loadMovies(page = 1) {
    try {
        const response = await fetch(`${API_URL}&s=2024&page=${page}`);
        const data = await response.json();

        if (data.Response === 'True') {
            displayMovies(data.Search);
        } else {
            console.error(data.Error);
            loadMoreBtn.style.display = 'none'; // Masquer le bouton si plus de films
        }
    } catch (error) {
        console.error('Erreur lors du chargement des films :', error);
    }
}

// Fonction pour afficher les films dans la grille
function displayMovies(movies) {
    movies.forEach(movie => {
        const movieCard = document.createElement('div');
        movieCard.classList.add('movie-card');

        movieCard.innerHTML = `
            <h3>${movie.Title}</h3>
            <img src="${movie.Poster !== 'N/A' ? movie.Poster : 'img/default-poster.jpg'}" alt="Affiche de ${movie.Title}">
            <a href="movie.html?imdbID=${movie.imdbID}" class="btn">En savoir plus</a>
        `;

        moviesContainer.appendChild(movieCard);
    });
}

// Gestion du bouton "Charger plus"
loadMoreBtn.addEventListener('click', () => {
    currentPage++;
    loadMovies(currentPage);
});

// Charger les films initiaux
loadMovies();
console.log('done');