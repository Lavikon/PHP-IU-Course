DROP TABLE IF EXISTS php2022niko_M13;

CREATE TABLE php2022niko_M13 (
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    year INT NOT NULL,
    rating DECIMAL(2,1) NOT NULL,
    link VARCHAR(255) NOT NULL,
    director VARCHAR(255) NOT NULL,
    stars TEXT NOT NULL
)

INSERT INTO php2022niko_M13 (title, year, rating, link, director, stars)
VALUES
    ('The Godfather', 1972, 9.2, '#', 'Francis Ford Coppola', 'Marlon Brando, Al Pacino, James Caan'),
    ('The Shawshank Redemption', 1994, 9.3, '#', 'Frank Darabont', 'Tim Robbins, Morgan Freeman, Bob Gunton'),
    ('Schindler''s List', 1993, 8.9, '#', 'Steven Spielberg', 'Liam Neeson, Ben Kingsley, Ralph Fiennes'),
    ('The Dark Knight', 2008, 9.0, '#', 'Christopher Nolan', 'Christian Bale, Heath Ledger, Aaron Eckhart'),
    ('12 Angry Men', 1957, 8.9, '#', 'Sidney Lumet', 'Henry Fonda, Lee J. Cobb, Martin Balsam'),
    ('The Lord of the Rings: The Return of the King', 2003, 8.9, '#', 'Peter Jackson', 'Elijah Wood, Viggo Mortensen, Ian McKellen'),
    ('Pulp Fiction', 1994, 8.9, '#', 'Quentin Tarantino', 'John Travolta, Uma Thurman, Samuel L. Jackson'),
    ('The Good, the Bad and the Ugly', 1966, 8.9, '#', 'Sergio Leone', 'Clint Eastwood, Lee Van Cleef, Eli Wallach'),
    ('Fight Club', 1999, 8.8, '#', 'David Fincher', 'Brad Pitt, Edward Norton, Helena Bonham Carter'),
    ('The Lord of the Rings: The Fellowship of the Ring', 2001, 8.8, '#', 'Peter Jackson', 'Elijah Wood, Ian McKellen, Viggo Mortensen');