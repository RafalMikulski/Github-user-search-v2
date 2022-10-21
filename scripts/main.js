const url = "https://api.github.com/users/";
const btnSubmit = document.querySelector("#submit");

const searchName = document.querySelector("#search-name");
const userAvatar = document.querySelector("#avatar");
const userName = document.querySelector("#name");
const userProfileName = document.querySelector("#user");
const userData = document.querySelector("#date");
const userBio = document.querySelector("#bio");
const userFollowers = document.querySelector("#followers");
const userFollowing = document.querySelector("#following");
const userRepos = document.querySelector("#repos");
const userGists = document.querySelector("#gists");
const userLocation = document.querySelector("#location");
const twitter = document.querySelector("#twitter");
const company = document.querySelector("#company");
const blog = document.querySelector("#blog");

btnSubmit.addEventListener("click", function () {
	fetchUserData();
});

// searchName.addEventListener("keypress", function () {
// 	fetchUserData();
// });

function fetchUserData() {
	fetch(url + searchName.value).then(async res => {
		const data = await res.json();
		console.log(res.status);
		if (res.status === 200) {
			userAvatar.src = data.avatar_url;
			userName.innerText = data.name;
			userProfileName.innerText = data.login;
			userData.innerText = data.created_at;
			userBio.innerText = data.bio;
			userFollowers.innerText = data.followers;
			userFollowing.innerText = data.following;
			userRepos.innerText = data.public_repos;
			userGists.innerText = data.public_gists;
			userLocation.innerText = data.location;
			twitter.innerText = data.twitter_username;
			company.innerText = data.company;
			blog.innerText = data.blog;
		} else {
			// userAvatar.src = "";
			// userName.innerText = "User nie istnieje";
			// userProfileName.innerText = "";
			// userData.innerText = "";
			// userBio.innerText = "";
			// userFollowers.innerText = "";
			// userFollowing.innerText = "";
			// userRepos.innerText = "";
			// userGists.innerText = "";
			// userLocation.innerText = "";
			// twitter.innerText = "";
			// company.innerText = "";
			// blog.innerText = "";
			userName.innerText = `No profile with name ${searchName}`;
		}
	});
}
