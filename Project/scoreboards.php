
<?php
      $conn = mysqli_connect('localhost:3307', 'root', '', 'web_project');
	  
      // Check the connection
      if (!$conn) {
          die('Connection failed: ' . mysqli_connect_error());
      }
      
      // Select the number of registrations for each date
      $sql = "SELECT username, score,token,token_history FROM user GROUP BY user_id ORDER BY score DESC";
      $result = mysqli_query($conn, $sql);
      
      
      if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $dateArray[] = "'Oνομα χρήστη:" . $row['username'] . ",\t score χρήστη: " . $row['score'] . ",\t\t\t tokens μήνα: " . $row['token'] . ",\t Συνολικά tokens: " . $row['token_history'] . "";
            //$scoreArray[] = $row["score"];
        }
    }
    
    
    
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Χρήστες</title>

	<style>
    * {
	margin: 0;
	padding: 0;
	box-sizing: border-box;
	font-family: sans-serif;
}

body {
	background: #F3F3F3;
}

header {
	display: flex;
	justify-content: center;
	align-items: center;
	height: 60px;
	background-color: #EEE;
	box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
}

main {
	display: flex;
	flex-direction: column;
	align-items: center;
}

main .list {
	width: 100%;
	max-width: 650px;
	background-color: #FFF;
	border: 1px solid #CCC;
	margin-top: 25px;
}

main .list .item {
	
	padding: 15px;
	border-bottom: 1px solid #CCC;
}
main .list .item:last-of-type {
	border-bottom: none;
}
main .list .item:hover {
	background: rgba(0, 0, 0, 0.05);
}

.pagenumbers {
	display: flex;
	flex-wrap: wrap;
	justify-content: center;
	align-items: center;
}

.pagenumbers button {
	width: 50px;
	height: 50px;

	appearance: none;
	border: none;
	outline: none;
	cursor: pointer;

	background-color: #44AAEE;

	margin: 5px;
	transition: 0.4s;

	color: #FFF;
	font-size: 18px;
	text-shadow: 0px 0px 4px rgba(0, 0, 0, 0.2);
	box-shadow: 0px 0px 4px rgba(0, 0, 0, 0.2);
}

.pagenumbers button:hover {
	background-color: #44EEAA;
}

.pagenumbers button.active {
	background-color: #44EEAA;
	box-shadow: inset 0px 0px 4px rgba(0, 0, 0, 0.2);
}
  </style>
</head>
<body>
	<header>
		<h1>Χρήστες</h1>
	</header>
	<main>
		<div class="list" id="list"></div>
		<div class="pagenumbers" id="pagination"></div>
	</main>
	<script >
    const list_items = <?php echo json_encode($dateArray); ?>;

const list_element = document.getElementById('list');
const pagination_element = document.getElementById('pagination');

let current_page = 1;
let rows = 10;

function DisplayList (items, wrapper, rows_per_page, page) {
	wrapper.innerHTML = "";
	page--;

	let start = rows_per_page * page;
	let end = start + rows_per_page;
	let paginatedItems = items.slice(start, end);

	for (let i = 0; i < paginatedItems.length; i++) {
		let item = paginatedItems[i];

		let item_element = document.createElement('div');
		item_element.classList.add('item');
		item_element.innerText = item;
		
		wrapper.appendChild(item_element);
	}
}

function SetupPagination (items, wrapper, rows_per_page) {
	wrapper.innerHTML = "";

	let page_count = Math.ceil(items.length / rows_per_page);
	for (let i = 1; i < page_count + 1; i++) {
		let btn = PaginationButton(i, items);
		wrapper.appendChild(btn);
	}
}

function PaginationButton (page, items) {
	let button = document.createElement('button');
	button.innerText = page;

	if (current_page == page) button.classList.add('active');

	button.addEventListener('click', function () {
		current_page = page;
		DisplayList(items, list_element, rows, current_page);

		let current_btn = document.querySelector('.pagenumbers button.active');
		current_btn.classList.remove('active');

		button.classList.add('active');
	});

	return button;
}

DisplayList(list_items, list_element, rows, current_page);
SetupPagination(list_items, pagination_element, rows);
  </script>
</body>
</html>