DROP TABLE IF EXISTS php2022niko_movies;

CREATE TABLE php2022niko_movies (
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    rating DECIMAL(2,1) NOT NULL,
    year INT NOT NULL,
    link VARCHAR(255) NOT NULL,
    director VARCHAR(255) NOT NULL,
    stars TEXT NOT NULL
)

INSERT INTO php2022niko_movies (title, rating, year, link, director, stars)
VALUES
('The Shawshank Redemption',9.2,1994,'https://www.imdb.com/title/tt0111161/','Frank Darabont', 'Tim Robbins, Morgan Freeman, Bob Gunton'),
('The Godfather',9.2,1972,'https://www.imdb.com/title/tt0068646/','Francis Ford Coppola', 'Marlon Brando, Al Pacino, James Caan'),
('The Dark Knight',9,2008,'https://www.imdb.com/title/tt0468569/','Christopher Nolan', 'Christian Bale, Heath Ledger, Aaron Eckhart'),
('The Godfather Part II',9,1974,'https://www.imdb.com/title/tt0071562','Francis Ford Coppola', 'Al Pacino, James Caan, Robert Duvall'),
('12 Angry Men',9,1957,'https://www.imdb.com/title/tt0050083/','Sidney Lumet', 'Henry Fonda, Lee J. Cobb, Martin Balsam'),
('Schindler&#39;s List',8.9,1993,'https://www.imdb.com/title/tt0108052/','Steven Spielberg', 'Liam Neeson, Ben Kingsley, Ralph Fiennes'),
('The Lord of the Rings: The Return of the King',8.9,2003,'https://www.imdb.com/title/tt0167260/','Peter Jackson', 'Elijah Wood, Viggo Mortensen, Ian McKellen'),
('Pulp Fiction',8.8,1994,'https://www.imdb.com/title/tt0110912/','Quentin Tarantino', 'John Travolta, Uma Thurman, Samuel L. Jackson'),
('The Lord of the Rings: The Fellowship of the Ring',8.8,2001,'https://www.imdb.com/title/tt0120737/','Peter Jackson', 'Elijah Wood, Viggo Mortensen, Ian McKellen'),
('The Good, the Bad and the Ugly',8.8,1966,'https://www.imdb.com/title/tt0060196/','Sergio Leone', 'Clint Eastwood, Lee Van Cleef, Eli Wallach'),
('Forrest Gump',8.8,1994,'https://www.imdb.com/title/tt0109830/','Robert Zemeckis','Tom Hanks, Robin Wright, Gary Sinise'),
('Fight Club',8.7,1999,'https://www.imdb.com/title/tt0137523/','David Fincher', 'Brad Pitt, Edward Norton, Helena Bonham Carter'),
('The Lord of the Rings: The Two Towers',8.7,2002,'https://www.imdb.com/title/tt0167261/','Peter Jackson', 'Elijah Wood, Viggo Mortensen, Ian McKellen'),
('Inception',8.7,2010,'#',' ',' '),
('Star Wars: Episode V - The Empire Strikes Back',8.7,1980,'#',' ',' '),
('The Matrix',8.7,1999,'#',' ',' '),
('Goodfellas',8.7,1990,'#',' ',' '),
('One Flew Over the Cuckoo&#39;s Nest',8.6,1975,'#',' ',' '),
('Se7en',8.6,1995,'#',' ',' '),
('Seven Samurai',8.6,1954,'#',' ',' '),
('It&#39;s a Wonderful Life',8.6,1946,'#',' ',' '),
('The Silence of the Lambs',8.6,1991,'#',' ',' '),
('City of God',8.6,2002,'#',' ',' '),
('Saving Private Ryan',8.6,1998,'#',' ',' '),
('Life Is Beautiful',8.6,1997,'#',' ',' '),
('Interstellar',8.6,2014,'#',' ',' '),
('The Green Mile',8.6,1999,'#',' ',' '),
('Star Wars: Episode IV - A New Hope',8.6,1977,'#',' ',' '),
('Terminator 2: Judgment Day',8.5,1991,'#',' ',' '),
('Back to the Future',8.5,1985,'#',' ',' '),
('Spirited Away',8.5,2001,'#',' ',' '),
('Psycho',8.5,1960,'#',' ',' '),
('The Pianist',8.5,2002,'#',' ',' '),
('Parasite',8.5,2019,'#',' ',' '),
('Léon: The Professional',8.5,1994,'#',' ',' '),
('The Lion King',8.5,1994,'#',' ',' '),
('Gladiator',8.5,2000,'#',' ',' '),
('American History X',8.5,1998,'#',' ',' '),
('The Departed',8.5,2006,'#',' ',' '),
('The Usual Suspects',8.5,1995,'#',' ',' '),
('The Prestige',8.5,2006,'#',' ',' '),
('Whiplash',8.5,2014,'#',' ',' '),
('Casablanca',8.5,1942,'#',' ',' '),
('Harakiri',8.5,1962,'#',' ',' '),
('The Intouchables',8.5,2011,'#',' ',' '),
('Grave of the Fireflies',8.5,1988,'#',' ',' '),
('Modern Times',8.4,1936,'#',' ',' '),
('Once Upon a Time in the West',8.4,1968,'#',' ',' '),
('Rear Window',8.4,1954,'#',' ',' '),
('Cinema Paradiso',8.4,1988,'#',' ',' '),
('Alien',8.4,1979,'#',' ',' '),
('City Lights',8.4,1931,'#',' ',' '),
('Apocalypse Now',8.4,1979,'#',' ',' '),
('Memento',8.4,2000,'#',' ',' '),
('Indiana Jones and the Raiders of the Lost Ark',8.4,1981,'#',' ',' '),
('Django Unchained',8.4,2012,'#',' ',' '),
('WALL·E',8.4,2008,'#',' ',' '),
('The Lives of Others',8.4,2006,'#',' ',' '),
('Sunset Blvd.',8.4,1950,'#',' ',' '),
('Paths of Glory',8.4,1957,'#',' ',' '),
('The Great Dictator',8.4,1940,'#',' ',' '),
('The Shining',8.4,1980,'#',' ',' '),
('Avengers: Infinity War',8.4,2018,'#',' ',' '),
('Witness for the Prosecution',8.4,1957,'#',' ',' '),
('Aliens',8.3,1986,'#',' ',' '),
('Spider-Man: Into the Spider-Verse',8.3,2018,'#',' ',' '),
('American Beauty',8.3,1999,'#',' ',' '),
('Dr. Strangelove or: How I Learned to Stop Worrying and Love the Bomb',8.3,1964,'#',' ',' '),
('The Dark Knight Rises',8.3,2012,'#',' ',' '),
('Oldboy',8.3,2003,'#',' ',' '),
('Amadeus',8.3,1984,'#',' ',' '),
('Joker',8.3,2019,'#',' ',' '),
('Inglourious Basterds',8.3,2009,'#',' ',' '),
('Coco',8.3,2017,'#',' ',' '),
('Toy Story',8.3,1995,'#',' ',' '),
('Braveheart',8.3,1995,'#',' ',' '),
('The Boat',8.3,1981,'#',' ',' '),
('Avengers: Endgame',8.3,2019,'#',' ',' '),
('Princess Mononoke',8.3,1997,'#',' ',' '),
('Once Upon a Time in America',8.3,1984,'#',' ',' '),
('Good Will Hunting',8.3,1997,'#',' ',' '),
('Top Gun: Maverick',8.3,2022,'#',' ',' '),
('Your Name.',8.3,2016,'#',' ',' '),
('Requiem for a Dream',8.3,2000,'#',' ',' '),
('3 Idiots',8.3,2009,'#',' ',' '),
('Singin&#39; in the Rain',8.3,1952,'#',' ',' '),
('Toy Story 3',8.3,2010,'#',' ',' '),
('High and Low',8.3,1963,'#',' ',' '),
('Star Wars: Episode VI - Return of the Jedi',8.3,1983,'#',' ',' '),
('Capernaum',8.3,2018,'#',' ',' '),
('Eternal Sunshine of the Spotless Mind',8.3,2004,'#',' ',' '),
('2001: A Space Odyssey',8.3,1968,'#',' ',' '),
('Reservoir Dogs',8.3,1992,'#',' ',' '),
('The Hunt',8.3,2012,'#',' ',' '),
('Come and See',8.3,1985,'#',' ',' '),
('Citizen Kane',8.3,1941,'#',' ',' '),
('M',8.3,1931,'#',' ',' '),
('Lawrence of Arabia',8.3,1962,'#',' ',' '),
('North by Northwest',8.2,1959,'#',' ',' '),
('Vertigo',8.2,1958,'#',' ',' '),
('Amélie',8.2,2001,'#',' ',' '),
('A Clockwork Orange',8.2,1971,'#',' ',' '),
('The Apartment',8.2,1960,'#',' ',' '),
('Ikiru',8.2,1952,'#',' ',' '),
('Double Indemnity',8.2,1944,'#',' ',' '),
('Full Metal Jacket',8.2,1987,'#',' ',' '),
('Hamilton',8.2,2020,'#',' ',' '),
('Scarface',8.2,1983,'#',' ',' '),
('To Kill a Mockingbird',8.2,1962,'#',' ',' '),
('The Sting',8.2,1973,'#',' ',' '),
('Incendies',8.2,2010,'#',' ',' '),
('Up',8.2,2009,'#',' ',' '),
('Heat',8.2,1995,'#',' ',' '),
('Taxi Driver',8.2,1976,'#',' ',' '),
('A Separation',8.2,2011,'#',' ',' '),
('Metropolis',8.2,1927,'#',' ',' '),
('L.A. Confidential',8.2,1997,'#',' ',' '),
('Snatch',8.2,2000,'#',' ',' '),
('Die Hard',8.2,1988,'#',' ',' '),
('Bicycle Thieves',8.2,1948,'#',' ',' '),
('Indiana Jones and the Last Crusade',8.2,1989,'#',' ',' '),
('Like Stars on Earth',8.2,2007,'#',' ',' '),
('1917',8.2,2019,'#',' ',' '),
('Downfall',8.2,2004,'#',' ',' '),
('For a Few Dollars More',8.2,1965,'#',' ',' '),
('Dangal',8.2,2016,'#',' ',' '),
('Batman Begins',8.2,2005,'#',' ',' '),
('The Kid',8.2,1921,'#',' ',' '),
('Some Like It Hot',8.2,1959,'#',' ',' '),
('The Father',8.2,2020,'#',' ',' '),
('All About Eve',8.2,1950,'#',' ',' '),
('Green Book',8.2,2018,'#',' ',' '),
('The Wolf of Wall Street',8.2,2013,'#',' ',' '),
('Judgment at Nuremberg',8.2,1961,'#',' ',' '),
('Ran',8.2,1985,'#',' ',' '),
('Casino',8.2,1995,'#',' ',' '),
('Pan&#39;s Labyrinth',8.2,2006,'#',' ',' '),
('Unforgiven',8.2,1992,'#',' ',' '),
('There Will Be Blood',8.2,2007,'#',' ',' '),
('The Truman Show',8.2,1998,'#',' ',' '),
('The Sixth Sense',8.2,1999,'#',' ',' '),
('A Beautiful Mind',8.2,2001,'#',' ',' '),
('Yojimbo',8.1,1961,'#',' ',' '),
('Spider-Man: No Way Home',8.1,2021,'#',' ',' '),
('Shutter Island',8.1,2010,'#',' ',' '),
('Monty Python and the Holy Grail',8.1,1975,'#',' ',' '),
('The Treasure of the Sierra Madre',8.1,1948,'#',' ',' '),
('Jurassic Park',8.1,1993,'#',' ',' '),
('The Great Escape',8.1,1963,'#',' ',' '),
('Rashomon',8.1,1950,'#',' ',' '),
('Kill Bill: Vol. 1',8.1,2003,'#',' ',' '),
('No Country for Old Men',8.1,2007,'#',' ',' '),
('Finding Nemo',8.1,2003,'#',' ',' '),
('The Thing',8.1,1982,'#',' ',' '),
('The Elephant Man',8.1,1980,'#',' ',' '),
('Chinatown',8.1,1974,'#',' ',' '),
('Raging Bull',8.1,1980,'#',' ',' '),
('Gone with the Wind',8.1,1939,'#',' ',' '),
('V for Vendetta',8.1,2005,'#',' ',' '),
('Inside Out',8.1,2015,'#',' ',' '),
('Lock, Stock and Two Smoking Barrels',8.1,1998,'#',' ',' '),
('Dial M for Murder',8.1,1954,'#',' ',' '),
('The Secret in Their Eyes',8.1,2009,'#',' ',' '),
('Howl&#39;s Moving Castle',8.1,2004,'#',' ',' '),
('The Bridge on the River Kwai',8.1,1957,'#',' ',' '),
('Three Billboards Outside Ebbing, Missouri',8.1,2017,'#',' ',' '),
('Trainspotting',8.1,1996,'#',' ',' '),
('Warrior',8.1,2011,'#',' ',' '),
('Fargo',8.1,1996,'#',' ',' '),
('Gran Torino',8.1,2008,'#',' ',' '),
('Prisoners',8.1,2013,'#',' ',' '),
('My Neighbor Totoro',8.1,1988,'#',' ',' '),
('Catch Me If You Can',8.1,2002,'#',' ',' '),
('Million Dollar Baby',8.1,2004,'#',' ',' '),
('Children of Heaven',8.1,1997,'#',' ',' '),
('The Gold Rush',8.1,1925,'#',' ',' '),
('Blade Runner',8.1,1982,'#',' ',' '),
('On the Waterfront',8.1,1954,'#',' ',' '),
('Before Sunrise',8.1,1995,'#',' ',' '),
('12 Years a Slave',8.1,2013,'#',' ',' '),
('Harry Potter and the Deathly Hallows: Part 2',8.1,2011,'#',' ',' '),
('Ben-Hur',8.1,1959,'#',' ',' '),
('Wild Strawberries',8.1,1957,'#',' ',' '),
('Gone Girl',8.1,2014,'#',' ',' '),
('The Third Man',8.1,1949,'#',' ',' '),
('The General',8.1,1926,'#',' ',' '),
('The Grand Budapest Hotel',8.1,2014,'#',' ',' '),
('The Deer Hunter',8.1,1978,'#',' ',' '),
('In the Name of the Father',8.1,1993,'#',' ',' '),
('Barry Lyndon',8.1,1975,'#',' ',' '),
('The Wages of Fear',8.1,1953,'#',' ',' '),
('Klaus',8.1,2019,'#',' ',' '),
('Hacksaw Ridge',8.1,2016,'#',' ',' '),
('Mr. Smith Goes to Washington',8.1,1939,'#',' ',' '),
('Sherlock Jr.',8.1,1924,'#',' ',' '),
('Memories of Murder',8.1,2003,'#',' ',' '),
('Wild Tales',8.1,2014,'#',' ',' '),
('The Seventh Seal',8.1,1957,'#',' ',' '),
('Room',8.1,2015,'#',' ',' '),
('Mad Max: Fury Road',8.1,2015,'#',' ',' '),
('Mary and Max',8.1,2009,'#',' ',' '),
('How to Train Your Dragon',8.1,2010,'#',' ',' '),
('The Big Lebowski',8.1,1998,'#',' ',' '),
('Monsters Inc.',8.1,2001,'#',' ',' '),
('Jaws',8.1,1975,'#',' ',' '),
('Dead Poets Society',8.1,1989,'#',' ',' '),
('The Passion of Joan of Arc',8.1,1928,'#',' ',' '),
('Tokyo Story',8.1,1953,'#',' ',' '),
('Hotel Rwanda',8.1,2004,'#',' ',' '),
('Ford v Ferrari',8,2019,'#',' ',' '),
('Rocky',8,1976,'#',' ',' '),
('Platoon',8,1986,'#',' ',' '),
('Spotlight',8,2015,'#',' ',' '),
('Stand by Me',8,1986,'#',' ',' '),
('The Terminator',8,1984,'#',' ',' '),
('Logan',8,2017,'#',' ',' '),
('Ratatouille',8,2007,'#',' ',' '),
('Rush',8,2013,'#',' ',' '),
('Pather Panchali',8,1955,'#',' ',' '),
('Network',8,1976,'#',' ',' '),
('Into the Wild',8,2007,'#',' ',' '),
('The Wizard of Oz',8,1939,'#',' ',' '),
('Before Sunset',8,2004,'#',' ',' '),
('Groundhog Day',8,1993,'#',' ',' '),
('The Exorcist',8,1973,'#',' ',' '),
('The Best Years of Our Lives',8,1946,'#',' ',' '),
('The Incredibles',8,2004,'#',' ',' '),
('To Be or Not to Be',8,1942,'#',' ',' '),
('The Battle of Algiers',8,1966,'#',' ',' '),
('Hachi: A Dog&#39;s Tale',8,2009,'#',' ',' '),
('La haine',8,1995,'#',' ',' '),
('Jai Bhim',8,2021,'#',' ',' '),
('Pirates of the Caribbean: The Curse of the Black Pearl',8,2003,'#',' ',' '),
('The Grapes of Wrath',8,1940,'#',' ',' '),
('My Father and My Son',8,2005,'#',' ',' '),
('Amores perros',8,2000,'#',' ',' '),
('Rebecca',8,1940,'#',' ',' '),
('Cool Hand Luke',8,1967,'#',' ',' '),
('The 400 Blows',8,1959,'#',' ',' '),
('Everything Everywhere All at Once',8,2022,'#',' ',' '),
('The Handmaiden',8,2016,'#',' ',' '),
('It Happened One Night',8,1934,'#',' ',' '),
('Persona',8,1966,'#',' ',' '),
('The Sound of Music',8,1965,'#',' ',' '),
('Life of Brian',8,1979,'#',' ',' '),
('Dersu Uzala',8,1975,'#',' ',' '),
('Aladdin',8,1992,'#',' ',' '),
('The Help',8,2011,'#',' ',' '),
('The Iron Giant',8,1999,'#',' ',' '),
('Gandhi',8,1982,'#',' ',' ');