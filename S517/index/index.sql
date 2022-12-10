DROP TABLE IF EXISTS php2022niko_index;

CREATE TABLE php2022niko_index (
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(50) NOT NULL,
    task VARCHAR(50) NOT NULL,
    link VARCHAR(30) NOT NULL
);

INSERT INTO php2022niko_index (title, task, link)
VALUES 
('Publishing on the Web','Editing and uploading a web page','../module1/module1.html'),
('Getting Started With PHP','Using PHP with HTML','../module2/index.html'),
('PHP Variables','Declaring and calling variables','../module3/module3.php'),
('PHP for HTML forms (1)','Displaying form entries','../module4/feedback2.html'),
('PHP for HTML forms (2)','Form accessibility and security','../module5/module5form.html'),
('PHP Control Structures','PHP with IF statements','../module6/module6form.html'),
('PHP Arrays','Creating and displaying arrays','../module7/module7form.html'),
('PHP for HTML Forms (3)','Creating a template','../module8/module8form.php'),
('PHP Functions','Functions','../module9/module9functions.php'),
('Accessing and Retrieving Data from Databases (1)','Connecting to MySQL and handling errors','../module10/module10view_entries.php'),
('Accessing and Retrieving Data from Databases (2)','Feedback and SQL Injection prevention','../module11/module11search.php'),
('Accessing and Retrieving Data from Databases (3)','Retrieving data via SQL','../module12/module12search.php'),
('Accessing and Retrieving Data from Databases (4)','Exporting and importing data','../module13/module13search.php'),
('Formatting Output from Databases Retrievals','Final project progress Discussion and Data upload','../module14/module14upload.php'),
('Completion of Final Project','Completion of final project','../module15/module15search.php');

ALTER TABLE php2022niko_index
ADD PRIMARY KEY ('moduleID');
