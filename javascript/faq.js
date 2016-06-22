var faqs = [
	{
		question: "If I have a family doctor, will they mind if I use clickMD?",
		answer: "Unlike going to regular walk-in clinics, your doctor will not be penalized if you use clickMD."
	}, 
	{
		question: "How much does a consultation cost?",
		answer: "The cost for service is $60 per issue. You do not need to pay any HST."
	},
	{
		question: "What types of problems can you help me with?",
		answer: "Simple primary healthcare issues that do not require an in-depth physical examination in person. Examples could include colds, rashes, allergies, mild anxiety, childcare advice, second opinions on bloodwork or x-rays, etc."
	},
	{
		question: "Can you prescribe medication?",
		answer: "Yes! We can even send your prescription to your regular pharmacist who may deliver your medication directly to you. However, we do not provide prescriptions for restricted substances such as narcotics, benzodiazepines, or anabolic steroids."
	},
	{
		question: "Is my privacy and medical information protected?",
		answer: "Yes. Our service is PHIPA-compliant. We do not store any of your medical information on the internet, and our video conferencing system is secure. We do, however, store your medical records on our secure and government-approved electronic medical record system."
	},
	{
		question:"Who are your doctors?",
		answer:"Our doctors are all primary care physicians fully-licensed to practice in Ontario. At this time, we CANNOT see any patients outside of Ontario."
	}
];

var i = 0;
var delay = 5000

$(document).ready(function(){
	myTimer();
	setInterval(myTimer, delay);
});

function myTimer() {
    $('#faq-question').fadeOut(function(){
    	$('#faq-question').html('Q: ' + faqs[i%faqs.length].question);    	
    });
    $('#faq-answer').fadeOut(function(){
    	$('#faq-answer').html('A: ' + faqs[i%faqs.length].answer)
    });
    $('#faq-question').fadeIn();
    $('#faq-answer').fadeIn();
    i++;
}