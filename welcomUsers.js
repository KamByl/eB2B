function welcomeUsers(person)
{
	if (person.salary > 15000)
	{
		console.log('Witaj, prezesie!');
	}
	else if (person.salary < 5000)
	{
		console.log(person.username + ', szykuj się na podwyżkę!');
	}
	else if ((person.birthYear % 2) == 0)
	{
		var age = new Date().getFullYear()-person.birthYear;
		console.log('Witaj, ' + person.username + '! W tym rokukończysz ' + age + ' lat!');
	}
	else
	{
		console.log(person.username + ', jesteś zwolniony!');
	}
}