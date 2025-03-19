const API_KEY = '6285896b'; // Clé API OMDb
const API_URL = `https://www.omdbapi.com/?apikey=${API_KEY}&type=movie`;
const searchInput = document.getElementById('search-input');
const searchResults = document.getElementById('search-results');
const loadMoreBtn = document.getElementById('load-more-btn');

let currentPage = 1; // Suivi de la page actuelle
let currentQuery = ''; // Titre du film recherché

// Fonction pour effectuer une recherche
async function searchMovies(query, page = 1) {
    try {
        const response = await fetch(`${API_URL}&s=${query}&page=${page}`);
        const data = await response.json();

        if (data.Response === 'True') {
            displayMovies(data.Search);
        } else {
            console.warn(data.Error);
            if (page === 1) {
                searchResults.innerHTML = `<p>Aucun film trouvé pour "${query}".</p>`;
            }
            loadMoreBtn.style.display = 'none'; // Masquer le bouton si aucun résultat
        }
    } catch (error) {
        console.error('Erreur lors de la recherche des films :', error);
    }
}

// Fonction pour afficher les films
function displayMovies(movies) {
    movies.forEach(movie => {
        const movieCard = document.createElement('div');
        movieCard.classList.add('movie-card');

        movieCard.innerHTML = `
            <img src="${movie.Poster !== 'N/A' ? movie.Poster : 'img/default-poster.jpg'}" alt="Affiche de ${movie.Title}">
            <h3>${movie.Title}</h3>
            <a href="movie.html?imdbID=${movie.imdbID}" class="btn">En savoir plus</a>
        `;

        searchResults.appendChild(movieCard);
    });
}

// Gestion de la barre de recherche
searchInput.addEventListener('input', (e) => {
    currentQuery = e.target.value.trim();
    if (currentQuery.length > 2) { // Lancer la recherche si le titre a plus de 2 caractères
        currentPage = 1;
        searchResults.innerHTML = ''; // Réinitialiser les résultats
        searchMovies(currentQuery, currentPage);
        loadMoreBtn.style.display = 'block'; // Réactiver le bouton si masqué
    }
});

// Gestion du bouton "Rechercher"
document.getElementById('search-btn').addEventListener('click', () => {
    if (searchInput.value.trim().length > 2) {
        currentQuery = searchInput.value.trim();
        currentPage = 1;
        searchResults.innerHTML = ''; // Réinitialiser les résultats
        searchMovies(currentQuery, currentPage);
        loadMoreBtn.style.display = 'block';
    }
});

// Gestion du bouton "Charger plus"
loadMoreBtn.addEventListener('click', () => {
    currentPage++;
    searchMovies(currentQuery, currentPage);
});
