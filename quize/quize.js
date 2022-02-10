window.onload = function()
{
	show(0);
}


let questions = [
{
	id:1,
	question: "what is the full form on html ?",
	answer: "Hyper text markup language",
	options:[
	"Hyper text markup language",
	"Hyper text go",
	"text language","hyper ml"
	]
},
{
	id:2,
	question: "what is the full form on RAM ?",
	answer: "Random Access memory",
	options:[
	"Hyper text markup language",
	"Random Access memory",
	"text language",
	"hyper ml"
	]
},
{
	id:3,
	question: "what is the full form on url ?",
	answer: "Uniform Resources locator",
	options:[
	"Hyper text markup language",
	"Uniform Resources locator",
	"text language","hyper ml"
	]
},
{
	id:4,
	question: "what is the full form on url ?",
	answer: "Uniform Resources locator",
	options:[
	"Hyper text markup language",
	"Uniform Resources locator",
	"text language","hyper ml"
	]
}

];
let question_count = 0;
let point = 0;
function next()
{
	const user_ans = document.querySelector("li.option.active").innerHTML;
// check ans by user
if (user_ans == questions[question_count].answer) {

point += 10;
sessionStorage.setItem("points",point);
}
	if (question_count == questions.length - 1) {
		sessionStorage.setItem("time",`${minutes} minutes and ${seconds} seconds time taken`);
		//clearInterval(mytime);
		location.href = "result.html";
		return;
	}
	





	question_count++;
	console.log(question_count);
	show(question_count);
	


}

function show(count)
{
	const q = document.getElementById('questions');
	//q.innerHTML = "<h2>" + questions[count].question +"</h2>";
	q.innerHTML = `Q${count+1}.<h2>${questions[count].question}</h2>
      <ul class="option_group">
					<li class="option">${questions[count].options[0]}</li>
					<li class="option">${questions[count].options[1]}</li>
					<li class="option">${questions[count].options[2]}</li>
					<li class="option">${questions[count].options[3]}</li>
				</ul>

	`;

	toggleActive();
}

function toggleActive()
{
  
  let option = document.querySelectorAll('li.option'); //li lena hain jiska css option se attach hain
for (let i=0; i< option.length; i++)
{
    option[i].onclick = function() {
    	for (let j=0; j< option.length; j++)
    	{

    	if (option[j].classList.contains("active")) {
    		option[j].classList.remove("active");

    	}

    }
    option[i].classList.add("active");
   }
 }
}




























function startquize(e)
{
	e.preventDefault();
	const n = document.getElementById('name').value;
	// stored player bname
	sessionStorage.setItem("name",n);
	// go to next page
	location.href="exam.html";
	document.querySelector(".userq").innerHTML = user;
	
}
