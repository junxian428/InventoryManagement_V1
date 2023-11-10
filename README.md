Login Page UI: https://github.com/junxian428/HackerLoginPage_UI

php artisan make:controller AuthController


php artisan make:model User

CREATE TABLE users (
    id INT PRIMARY KEY,
    username VARCHAR(255) UNIQUE NOT NULL,
    password VARCHAR(255) NOT NULL
);

INSERT INTO users (username, password) VALUES ('admin', 'admin');

$username = $request->input('username');
$password = $request->input('password');

$user = User::where('username', '=', $username)->first();

In this code, the values of $username and $password are not directly injected into the SQL query. Instead, they are treated as parameters and will be automatically escaped and sanitized by Laravel.

By using Eloquent's query builder methods, you are already safeguarding against SQL injection. Laravel handles the parameter binding for you, making it secure by default.

However, if you ever need to execute raw SQL queries in Laravel, you should use parameter binding provided by the query builder or use bindings:


php artisan make:controller DashboardController

https://freefrontend.com/css-dashboards/#google_vignette


https://codepen.io/TheMOZZARELLA/pen/BawVrYr

https://codepen.io/adnanov/pen/QKjMgb


 To run:

 php artisan serve

 go to http://localhost:8000

Client: http://localhost:8000

Admin : http://localhost:8000/superuser


php artisan make:controller ClientDashboardController


For pagination :

php artisan vendor:publish --tag=laravel-pagination


php artisan make:controller PLCController

php artisan make:controller HMIController

php artisan make:controller IPCController

php artisan make:controller ECController

PS C:\Users\USer\Desktop1\MMU\V2> php artisan make:controller HydraulicController

PS C:\Users\USer\Desktop1\MMU\V2> php artisan make:controller PneumaticsController

CREATE TABLE plc_items (
    id INT PRIMARY KEY,
    title VARCHAR(255),
    description TEXT,
    price INT,
    supplier VARCHAR(255),
    link VARCHAR(255)
);

INSERT INTO plc_items (id, title, description, price, supplier, link)
VALUES
(1, 'PLC Item 1', 'Description for PLC Item 1.', 500, 'Supplier 1', '/'),
(2, 'PLC Item 2', 'Description for PLC Item 2.', 750, 'Supplier 2', '/'),
(3, 'PLC Item 3', 'Description for PLC Item 3.', 300, 'Supplier 3', '/'),
(4, 'PLC Item 4', 'Description for PLC Item 4.', 200, 'Supplier 4', '/'),
(5, 'PLC Item 5', 'Description for PLC Item 5.', 900, 'Supplier 5', '/'),
(6, 'PLC Item 6', 'Description for PLC Item 6.', 400, 'Supplier 6', '/'),
(7, 'PLC Item 7', 'Description for PLC Item 7.', 600, 'Supplier 7', '/'),
(8, 'PLC Item 8', 'Description for PLC Item 8.', 150, 'Supplier 8', '/'),
(9, 'PLC Item 9', 'Description for PLC Item 9.', 800, 'Supplier 9', '/'),
(10, 'PLC Item 10', 'Description for PLC Item 10.', 350, 'Supplier 10', '/'),
(11, 'PLC Item 11', 'Description for PLC Item 11.', 450, 'Supplier 11', '/'),
(12, 'PLC Item 12', 'Description for PLC Item 12.', 700, 'Supplier 12', '/'),
(13, 'PLC Item 13', 'Description for PLC Item 13.', 250, 'Supplier 13', '/'),
(14, 'PLC Item 14', 'Description for PLC Item 14.', 180, 'Supplier 14', '/'),
(15, 'PLC Item 15', 'Description for PLC Item 15.', 950, 'Supplier 15', '/'),
(16, 'PLC Item 16', 'Description for PLC Item 16.', 420, 'Supplier 16', '/'),
(17, 'PLC Item 17', 'Description for PLC Item 17.', 620, 'Supplier 17', '/'),
(18, 'PLC Item 18', 'Description for PLC Item 18.', 130, 'Supplier 18', '/'),
(19, 'PLC Item 19', 'Description for PLC Item 19.', 870, 'Supplier 19', '/'),
(20, 'PLC Item 20', 'Description for PLC Item 20.', 320, 'Supplier 20', '/'),
(21, 'PLC Item 21', 'Description for PLC Item 21.', 580, 'Supplier 21', '/'),
(22, 'PLC Item 22', 'Description for PLC Item 22.', 160, 'Supplier 22', '/'),
(23, 'PLC Item 23', 'Description for PLC Item 23.', 890, 'Supplier 23', '/'),
(24, 'PLC Item 24', 'Description for PLC Item 24.', 400, 'Supplier 24', '/'),
(25, 'PLC Item 25', 'Description for PLC Item 25.', 220, 'Supplier 25', '/'),
(26, 'PLC Item 26', 'Description for PLC Item 26.', 670, 'Supplier 26', '/'),
(27, 'PLC Item 27', 'Description for PLC Item 27.', 540, 'Supplier 27', '/'),
(28, 'PLC Item 28', 'Description for PLC Item 28.', 280, 'Supplier 28', '/'),
(29, 'PLC Item 29', 'Description for PLC Item 29.', 760, 'Supplier 29', '/'),
(30, 'PLC Item 30', 'Description for PLC Item 30.', 190, 'Supplier 30', '/'),
(31, 'PLC Item 31', 'Description for PLC Item 31.', 880, 'Supplier 31', '/'),
(32, 'PLC Item 32', 'Description for PLC Item 32.', 480, 'Supplier 32', '/'),
(33, 'PLC Item 33', 'Description for PLC Item 33.', 510, 'Supplier 33', '/'),
(34, 'PLC Item 34', 'Description for PLC Item 34.', 360, 'Supplier 34', '/'),
(35, 'PLC Item 35', 'Description for PLC Item 35.', 670, 'Supplier 35', '/'),
(36, 'PLC Item 36', 'Description for PLC Item 36.', 740, 'Supplier 36', '/'),
(37, 'PLC Item 37', 'Description for PLC Item 37.', 280, 'Supplier 37', '/'),
(38, 'PLC Item 38', 'Description for PLC Item 38.', 930, 'Supplier 38', '/'),
(39, 'PLC Item 39', 'Description for PLC Item 39.', 120, 'Supplier 39', '/'),
(40, 'PLC Item 40', 'Description for PLC Item 40.', 680, 'Supplier 40', '/');

php artisan make:model PlcItem

---> Allow to display the items

___________________________________________________________________________________________

// Retrieve all records from the plc_items table
$plcItems = PlcItem::all();

// Define the number of items per page
$perPage = 30;

// Retrieve the current page number from the request, default to 1
$page = request()->get('page', 1);

// Calculate the offset based on the current page and items per page
$offset = ($page - 1) * $perPage;

// Slice the array to get the current page items
$currentPageItems = array_slice($plcItems->toArray(), $offset, $perPage);

// Count total items
$totalItems = count($plcItems);

// Calculate the last page
$lastPage = ceil($totalItems / $perPage);

return view('clientplc', compact('currentPageItems', 'page', 'lastPage'));

___________________________________________________________________________________________


推荐算法 ？
我根据两个factor

1） 被added into cart 次数
2） category tag 方式

CREATE TABLE plc_items (
    id INT PRIMARY KEY,
    title VARCHAR(255),
    description TEXT,
    price INT,
    supplier VARCHAR(255),
    link VARCHAR(255)
); 

Therefore

CREATE TABLE plc_items (
    id INT PRIMARY KEY,
    title VARCHAR(255),
    description TEXT,
    price INT,
    supplier VARCHAR(255),
    link VARCHAR(255),
    category VARCHAR(255) -- Adding a new column for the category tag
);


How about frequency, I use COUNT in SQL for query cart

-> Solved problem

1. home 
2. works
3. student 
4. gaming

-- Inserting 40 rows with different data and category tags
INSERT INTO plc_items (id,title, description, price, supplier, link, category)
VALUES 
    (1,'Item 1', 'Description for Item 1', 50, 'Supplier A', 'http://example.com/item1', 'Home'),
    (2,'Item 2', 'Description for Item 2', 60, 'Supplier A', 'http://example.com/item2', 'Home'),
    (3,'Item 3', 'Description for Item 3', 80, 'Supplier A', 'http://example.com/item3', 'Home'),
    (4,'Item 4', 'Description for Item 4', 80, 'Supplier A', 'http://example.com/item4', 'Home'),
    (5,'Item 5', 'Description for Item 5', 80, 'Supplier A', 'http://example.com/item5', 'Home'),
    (6,'Item 6', 'Description for Item 6', 80, 'Supplier A', 'http://example.com/item6', 'Home'),
    (7,'Item 7', 'Description for Item 7', 80, 'Supplier A', 'http://example.com/item7', 'Home'),
    (8,'Item 8', 'Description for Item 8', 80, 'Supplier A', 'http://example.com/item8', 'Home'),
    (9,'Item 9', 'Description for Item 9', 80, 'Supplier A', 'http://example.com/item9', 'Home'),
    (10,'Item 10', 'Description for Item 10', 80, 'Supplier A', 'http://example.com/item10', 'Home'),
    (11,'Item 11', 'Description for Item 11', 50, 'Supplier A', 'http://example.com/item11', 'Home'),
    (12,'Item 12', 'Description for Item 12', 60, 'Supplier A', 'http://example.com/item12', 'Home'),
    (13,'Item 13', 'Description for Item 13', 80, 'Supplier A', 'http://example.com/item13', 'Home'),
    (14,'Item 14', 'Description for Item 14', 80, 'Supplier A', 'http://example.com/item14', 'Home'),
    (15,'Item 15', 'Description for Item 15', 80, 'Supplier A', 'http://example.com/item15', 'Home'),
    (16,'Item 16', 'Description for Item 16', 80, 'Supplier A', 'http://example.com/item16', 'Home'),
    (17,'Item 17', 'Description for Item 17', 80, 'Supplier A', 'http://example.com/item17', 'Home'),
    (18,'Item 18', 'Description for Item 18', 80, 'Supplier A', 'http://example.com/item18', 'Home'),
    (19,'Item 19', 'Description for Item 19', 80, 'Supplier A', 'http://example.com/item19', 'Home'),
    (20,'Item 20', 'Description for Item 20', 80, 'Supplier A', 'http://example.com/item20', 'Home'),
    (21,'Item 21', 'Description for Item 21', 50, 'Supplier A', 'http://example.com/item21', 'Home'),
    (22,'Item 22', 'Description for Item 22', 60, 'Supplier A', 'http://example.com/item22', 'Home'),
    (23,'Item 23', 'Description for Item 23', 80, 'Supplier A', 'http://example.com/item23', 'Home'),
    (24,'Item 24', 'Description for Item 24', 80, 'Supplier A', 'http://example.com/item24', 'Home'),
    (25,'Item 25', 'Description for Item 25', 80, 'Supplier A', 'http://example.com/item25', 'Home'),
    (26,'Item 26', 'Description for Item 26', 80, 'Supplier A', 'http://example.com/item26', 'Home'),
    (27,'Item 27', 'Description for Item 27', 80, 'Supplier A', 'http://example.com/item27', 'Home'),
    (28,'Item 28', 'Description for Item 28', 80, 'Supplier A', 'http://example.com/item28', 'Home'),
    (29,'Item 29', 'Description for Item 29', 80, 'Supplier A', 'http://example.com/item29', 'Home'),
    (30,'Item 30', 'Description for Item 30', 80, 'Supplier A', 'http://example.com/item30', 'Home'),
    (31,'Item 31', 'Description for Item 31', 50, 'Supplier A', 'http://example.com/item31', 'Home'),
    (32,'Item 32', 'Description for Item 32', 60, 'Supplier A', 'http://example.com/item32', 'Home'),
    (33,'Item 33', 'Description for Item 33', 80, 'Supplier A', 'http://example.com/item33', 'Home'),
    (34,'Item 34', 'Description for Item 34', 80, 'Supplier A', 'http://example.com/item34', 'Home'),
    (35,'Item 35', 'Description for Item 35', 80, 'Supplier A', 'http://example.com/item35', 'Home'),
    (36,'Item 36', 'Description for Item 36', 80, 'Supplier A', 'http://example.com/item36', 'Home'),
    (37,'Item 37', 'Description for Item 37', 80, 'Supplier A', 'http://example.com/item37', 'Home'),
    (38,'Item 38', 'Description for Item 38', 80, 'Supplier A', 'http://example.com/item38', 'Home'),
    (39,'Item 39', 'Description for Item 39', 80, 'Supplier A', 'http://example.com/item39', 'Home'),
    (40,'Item 40', 'Description for Item 40', 80, 'Supplier A', 'http://example.com/item40', 'Home');

UPDATE plc_items
SET link = 'https://avatars.githubusercontent.com/u/58724748?v=4';


CREATE TABLE work_items (
    id INT PRIMARY KEY,
    title VARCHAR(255),
    description TEXT,
    price INT,
    supplier VARCHAR(255),
    link VARCHAR(255),
    category VARCHAR(255) -- Adding a new column for the category tag
);


-- Inserting 40 rows with different data and category tags
INSERT INTO work_items (id,title, description, price, supplier, link, category)
VALUES 
    (1,'Item 1', 'Description for Item 1', 50, 'Supplier B', 'http://example.com/item1', 'Work'),
    (2,'Item 2', 'Description for Item 2', 60, 'Supplier B', 'http://example.com/item2', 'Work'),
    (3,'Item 3', 'Description for Item 3', 80, 'Supplier B', 'http://example.com/item3', 'Work'),
    (4,'Item 4', 'Description for Item 4', 80, 'Supplier B', 'http://example.com/item4', 'Work'),
    (5,'Item 5', 'Description for Item 5', 80, 'Supplier B', 'http://example.com/item5', 'Work'),
    (6,'Item 6', 'Description for Item 6', 80, 'Supplier B', 'http://example.com/item6', 'Work'),
    (7,'Item 7', 'Description for Item 7', 80, 'Supplier B', 'http://example.com/item7', 'Work'),
    (8,'Item 8', 'Description for Item 8', 80, 'Supplier B', 'http://example.com/item8', 'Work'),
    (9,'Item 9', 'Description for Item 9', 80, 'Supplier B', 'http://example.com/item9', 'Work'),
    (10,'Item 10', 'Description for Item 10', 80, 'Supplier B', 'http://example.com/item10', 'Work'),
    (11,'Item 11', 'Description for Item 11', 50, 'Supplier B', 'http://example.com/item11', 'Work'),
    (12,'Item 12', 'Description for Item 12', 60, 'Supplier B', 'http://example.com/item12', 'Work'),
    (13,'Item 13', 'Description for Item 13', 80, 'Supplier B', 'http://example.com/item13', 'Work'),
    (14,'Item 14', 'Description for Item 14', 80, 'Supplier B', 'http://example.com/item14', 'Work'),
    (15,'Item 15', 'Description for Item 15', 80, 'Supplier B', 'http://example.com/item15', 'Work'),
    (16,'Item 16', 'Description for Item 16', 80, 'Supplier B', 'http://example.com/item16', 'Work'),
    (17,'Item 17', 'Description for Item 17', 80, 'Supplier B', 'http://example.com/item17', 'Work'),
    (18,'Item 18', 'Description for Item 18', 80, 'Supplier B', 'http://example.com/item18', 'Work'),
    (19,'Item 19', 'Description for Item 19', 80, 'Supplier B', 'http://example.com/item19', 'Work'),
    (20,'Item 20', 'Description for Item 20', 80, 'Supplier B', 'http://example.com/item20', 'Work'),
    (21,'Item 21', 'Description for Item 21', 50, 'Supplier B', 'http://example.com/item21', 'Work'),
    (22,'Item 22', 'Description for Item 22', 60, 'Supplier B', 'http://example.com/item22', 'Work'),
    (23,'Item 23', 'Description for Item 23', 80, 'Supplier B', 'http://example.com/item23', 'Work'),
    (24,'Item 24', 'Description for Item 24', 80, 'Supplier B', 'http://example.com/item24', 'Work'),
    (25,'Item 25', 'Description for Item 25', 80, 'Supplier B', 'http://example.com/item25', 'Work'),
    (26,'Item 26', 'Description for Item 26', 80, 'Supplier B', 'http://example.com/item26', 'Work'),
    (27,'Item 27', 'Description for Item 27', 80, 'Supplier B', 'http://example.com/item27', 'Work'),
    (28,'Item 28', 'Description for Item 28', 80, 'Supplier B', 'http://example.com/item28', 'Work'),
    (29,'Item 29', 'Description for Item 29', 80, 'Supplier B', 'http://example.com/item29', 'Work'),
    (30,'Item 30', 'Description for Item 30', 80, 'Supplier B', 'http://example.com/item30', 'Work'),
    (31,'Item 31', 'Description for Item 31', 50, 'Supplier B', 'http://example.com/item31', 'Work'),
    (32,'Item 32', 'Description for Item 32', 60, 'Supplier B', 'http://example.com/item32', 'Work'),
    (33,'Item 33', 'Description for Item 33', 80, 'Supplier B', 'http://example.com/item33', 'Work'),
    (34,'Item 34', 'Description for Item 34', 80, 'Supplier B', 'http://example.com/item34', 'Work'),
    (35,'Item 35', 'Description for Item 35', 80, 'Supplier B', 'http://example.com/item35', 'Work'),
    (36,'Item 36', 'Description for Item 36', 80, 'Supplier B', 'http://example.com/item36', 'Work'),
    (37,'Item 37', 'Description for Item 37', 80, 'Supplier B', 'http://example.com/item37', 'Work'),
    (38,'Item 38', 'Description for Item 38', 80, 'Supplier B', 'http://example.com/item38', 'Work'),
    (39,'Item 39', 'Description for Item 39', 80, 'Supplier B', 'http://example.com/item39', 'Work'),
    (40,'Item 40', 'Description for Item 40', 80, 'Supplier B', 'http://example.com/item40', 'Work');

php artisan make:model WorkItem

UPDATE work_items
SET link = 'https://www.counterpointresearch.com/wp-content/uploads/2017/06/counterpoint-xiaomi-mi-notebook-14-review-lead.jpg';


CREATE TABLE student_items (
    id INT PRIMARY KEY,
    title VARCHAR(255),
    description TEXT,
    price INT,
    supplier VARCHAR(255),
    link VARCHAR(255),
    category VARCHAR(255) -- Adding a new column for the category tag
);


-- Inserting 40 rows with different data and category tags
INSERT INTO student_items (id,title, description, price, supplier, link, category)
VALUES 
    (1,'Item 1', 'Description for Item 1', 50, 'Supplier B', 'http://example.com/item1', 'Student'),
    (2,'Item 2', 'Description for Item 2', 60, 'Supplier B', 'http://example.com/item2', 'Student'),
    (3,'Item 3', 'Description for Item 3', 80, 'Supplier B', 'http://example.com/item3', 'Student'),
    (4,'Item 4', 'Description for Item 4', 80, 'Supplier B', 'http://example.com/item4', 'Student'),
    (5,'Item 5', 'Description for Item 5', 80, 'Supplier B', 'http://example.com/item5', 'Student'),
    (6,'Item 6', 'Description for Item 6', 80, 'Supplier B', 'http://example.com/item6', 'Student'),
    (7,'Item 7', 'Description for Item 7', 80, 'Supplier B', 'http://example.com/item7', 'Student'),
    (8,'Item 8', 'Description for Item 8', 80, 'Supplier B', 'http://example.com/item8', 'Student'),
    (9,'Item 9', 'Description for Item 9', 80, 'Supplier B', 'http://example.com/item9', 'Student'),
    (10,'Item 10', 'Description for Item 10', 80, 'Supplier B', 'http://example.com/item10', 'Student'),
    (11,'Item 11', 'Description for Item 11', 50, 'Supplier B', 'http://example.com/item11', 'Student'),
    (12,'Item 12', 'Description for Item 12', 60, 'Supplier B', 'http://example.com/item12', 'Student'),
    (13,'Item 13', 'Description for Item 13', 80, 'Supplier B', 'http://example.com/item13', 'Student'),
    (14,'Item 14', 'Description for Item 14', 80, 'Supplier B', 'http://example.com/item14', 'Student'),
    (15,'Item 15', 'Description for Item 15', 80, 'Supplier B', 'http://example.com/item15', 'Student'),
    (16,'Item 16', 'Description for Item 16', 80, 'Supplier B', 'http://example.com/item16', 'Student'),
    (17,'Item 17', 'Description for Item 17', 80, 'Supplier B', 'http://example.com/item17', 'Student'),
    (18,'Item 18', 'Description for Item 18', 80, 'Supplier B', 'http://example.com/item18', 'Student'),
    (19,'Item 19', 'Description for Item 19', 80, 'Supplier B', 'http://example.com/item19', 'Student'),
    (20,'Item 20', 'Description for Item 20', 80, 'Supplier B', 'http://example.com/item20', 'Student'),
    (21,'Item 21', 'Description for Item 21', 50, 'Supplier B', 'http://example.com/item21', 'Student'),
    (22,'Item 22', 'Description for Item 22', 60, 'Supplier B', 'http://example.com/item22', 'Student'),
    (23,'Item 23', 'Description for Item 23', 80, 'Supplier B', 'http://example.com/item23', 'Student'),
    (24,'Item 24', 'Description for Item 24', 80, 'Supplier B', 'http://example.com/item24', 'Student'),
    (25,'Item 25', 'Description for Item 25', 80, 'Supplier B', 'http://example.com/item25', 'Student'),
    (26,'Item 26', 'Description for Item 26', 80, 'Supplier B', 'http://example.com/item26', 'Student'),
    (27,'Item 27', 'Description for Item 27', 80, 'Supplier B', 'http://example.com/item27', 'Student'),
    (28,'Item 28', 'Description for Item 28', 80, 'Supplier B', 'http://example.com/item28', 'Student'),
    (29,'Item 29', 'Description for Item 29', 80, 'Supplier B', 'http://example.com/item29', 'Student'),
    (30,'Item 30', 'Description for Item 30', 80, 'Supplier B', 'http://example.com/item30', 'Student'),
    (31,'Item 31', 'Description for Item 31', 50, 'Supplier B', 'http://example.com/item31', 'Student'),
    (32,'Item 32', 'Description for Item 32', 60, 'Supplier B', 'http://example.com/item32', 'Student'),
    (33,'Item 33', 'Description for Item 33', 80, 'Supplier B', 'http://example.com/item33', 'Student'),
    (34,'Item 34', 'Description for Item 34', 80, 'Supplier B', 'http://example.com/item34', 'Student'),
    (35,'Item 35', 'Description for Item 35', 80, 'Supplier B', 'http://example.com/item35', 'Student'),
    (36,'Item 36', 'Description for Item 36', 80, 'Supplier B', 'http://example.com/item36', 'Student'),
    (37,'Item 37', 'Description for Item 37', 80, 'Supplier B', 'http://example.com/item37', 'Student'),
    (38,'Item 38', 'Description for Item 38', 80, 'Supplier B', 'http://example.com/item38', 'Student'),
    (39,'Item 39', 'Description for Item 39', 80, 'Supplier B', 'http://example.com/item39', 'Student'),
    (40,'Item 40', 'Description for Item 40', 80, 'Supplier B', 'http://example.com/item40', 'Student');


    php artisan make:model StudentItem

    UPDATE student_items
SET link = 'https://png.pngtree.com/element_our/20190523/ourmid/pngtree-hand-painted-small-fresh-female-high-school-student-image_1086346.jpg';

CREATE TABLE gaming_items (
    id INT PRIMARY KEY,
    title VARCHAR(255),
    description TEXT,
    price INT,
    supplier VARCHAR(255),
    link VARCHAR(255),
    category VARCHAR(255) -- Adding a new column for the category tag
);


-- Inserting 40 rows with different data and category tags
INSERT INTO gaming_items (id,title, description, price, supplier, link, category)
VALUES 
    (1,'Item 1', 'Description for Item 1', 50, 'Supplier C', 'http://example.com/item1', 'Gaming'),
    (2,'Item 2', 'Description for Item 2', 60, 'Supplier C', 'http://example.com/item2', 'Gaming'),
    (3,'Item 3', 'Description for Item 3', 80, 'Supplier C', 'http://example.com/item3', 'Gaming'),
    (4,'Item 4', 'Description for Item 4', 80, 'Supplier C', 'http://example.com/item4', 'Gaming'),
    (5,'Item 5', 'Description for Item 5', 80, 'Supplier C', 'http://example.com/item5', 'Gaming'),
    (6,'Item 6', 'Description for Item 6', 80, 'Supplier C', 'http://example.com/item6', 'Gaming'),
    (7,'Item 7', 'Description for Item 7', 80, 'Supplier D', 'http://example.com/item7', 'Gaming'),
    (8,'Item 8', 'Description for Item 8', 80, 'Supplier C', 'http://example.com/item8', 'Gaming'),
    (9,'Item 9', 'Description for Item 9', 80, 'Supplier D', 'http://example.com/item9', 'Gaming'),
    (10,'Item 10', 'Description for Item 10', 80, 'Supplier C', 'http://example.com/item10', 'Gaming'),
    (11,'Item 11', 'Description for Item 11', 50, 'Supplier C', 'http://example.com/item11', 'Gaming'),
    (12,'Item 12', 'Description for Item 12', 60, 'Supplier C', 'http://example.com/item12', 'Gaming'),
    (13,'Item 13', 'Description for Item 13', 80, 'Supplier C', 'http://example.com/item13', 'Gaming'),
    (14,'Item 14', 'Description for Item 14', 80, 'Supplier C', 'http://example.com/item14', 'Gaming'),
    (15,'Item 15', 'Description for Item 15', 80, 'Supplier D', 'http://example.com/item15', 'Gaming'),
    (16,'Item 16', 'Description for Item 16', 80, 'Supplier A', 'http://example.com/item16', 'Gaming'),
    (17,'Item 17', 'Description for Item 17', 80, 'Supplier A', 'http://example.com/item17', 'Gaming'),
    (18,'Item 18', 'Description for Item 18', 80, 'Supplier A', 'http://example.com/item18', 'Gaming'),
    (19,'Item 19', 'Description for Item 19', 80, 'Supplier A', 'http://example.com/item19', 'Gaming'),
    (20,'Item 20', 'Description for Item 20', 80, 'Supplier A', 'http://example.com/item20', 'Gaming'),
    (21,'Item 21', 'Description for Item 21', 50, 'Supplier C', 'http://example.com/item21', 'Gaming'),
    (22,'Item 22', 'Description for Item 22', 60, 'Supplier E', 'http://example.com/item22', 'Gaming'),
    (23,'Item 23', 'Description for Item 23', 80, 'Supplier F', 'http://example.com/item23', 'Gaming'),
    (24,'Item 24', 'Description for Item 24', 80, 'Supplier D', 'http://example.com/item24', 'Gaming'),
    (25,'Item 25', 'Description for Item 25', 80, 'Supplier A', 'http://example.com/item25', 'Gaming'),
    (26,'Item 26', 'Description for Item 26', 80, 'Supplier a', 'http://example.com/item26', 'Gaming'),
    (27,'Item 27', 'Description for Item 27', 80, 'Supplier B', 'http://example.com/item27', 'Gaming'),
    (28,'Item 28', 'Description for Item 28', 80, 'Supplier B', 'http://example.com/item28', 'Gaming'),
    (29,'Item 29', 'Description for Item 29', 80, 'Supplier B', 'http://example.com/item29', 'Gaming'),
    (30,'Item 30', 'Description for Item 30', 80, 'Supplier B', 'http://example.com/item30', 'Gaming'),
    (31,'Item 31', 'Description for Item 31', 50, 'Supplier B', 'http://example.com/item31', 'Gaming'),
    (32,'Item 32', 'Description for Item 32', 60, 'Supplier B', 'http://example.com/item32', 'Gaming'),
    (33,'Item 33', 'Description for Item 33', 80, 'Supplier B', 'http://example.com/item33', 'Gaming'),
    (34,'Item 34', 'Description for Item 34', 80, 'Supplier B', 'http://example.com/item34', 'Gaming'),
    (35,'Item 35', 'Description for Item 35', 80, 'Supplier B', 'http://example.com/item35', 'Gaming'),
    (36,'Item 36', 'Description for Item 36', 80, 'Supplier B', 'http://example.com/item36', 'Gaming'),
    (37,'Item 37', 'Description for Item 37', 80, 'Supplier B', 'http://example.com/item37', 'Gaming'),
    (38,'Item 38', 'Description for Item 38', 80, 'Supplier B', 'http://example.com/item38', 'Gaming'),
    (39,'Item 39', 'Description for Item 39', 80, 'Supplier B', 'http://example.com/item39', 'Gaming'),
    (40,'Item 40', 'Description for Item 40', 80, 'Supplier B', 'http://example.com/item40', 'Gaming');

    php artisan make:model GamingItem


    UPDATE gaming_items
SET link = 'https://m.media-amazon.com/images/I/712g5R0vkbL._AC_UF894,1000_QL80_.jpg';