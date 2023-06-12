function saveLastLoginTime() {    // Сохранение времени последнего входа на сайт в куки
	const now = new Date();
	const expires = new Date(now.getTime() + 7 * 24 * 60 * 60 * 1000);    // куки будут храниться 7 дней
	document.cookie = `lastLoginTime=${now.toUTCString()};expires=${expires.toUTCString()};path=/`;
}

function setCookie(name, value, days) {  // Установка (добавление) куки с названием (именем), значением и кол-вом дней (сроком действия) куки
  var expires = "";
  if (days) {
    var date = new Date();
    date.setTime(date.getTime() + days * 24 * 60 * 60 * 1000);
    expires = "; expires=" + date.toUTCString();
  }
  document.cookie = name + "=" + (value || "")  + expires + "; path=/";
}
	
function getCookie(name) {
	const value = `; ${document.cookie}`;
	const parts = value.split(`; ${name}=`);
	if (parts.length === 2) {
		return parts.pop().split(';').shift();
	}
}

function deleteCookie(name) {
	document.cookie = `${name}=; expires=Thu, 01 Jan 1970 00:00:01 GMT; path=/;`;
}

// Пример использования:

saveLastLoginTime();

setCookie("username", "Dasha Sushkova", 7);
let username = getCookie("username");
console.log(username);
deleteCookie("username");