function closeChatbot() {
    document.getElementById('chatbot').style.display = 'none';
}

function sendQuestion() {
    var userInput = document.getElementById('user-input').value;
    if (userInput.trim() !== '') {
        displayUserMessage(userInput);
        getBotResponse(userInput);
        document.getElementById('user-input').value = '';
    }
}

function displayBotMessage(message) {
    var chatContainer = document.getElementById('chat-container');
    var botMessage = document.createElement('p');
    botMessage.classList.add('bot-message');
    botMessage.textContent = message;
    chatContainer.appendChild(botMessage);
    chatContainer.scrollTop = chatContainer.scrollHeight;
}

function displayUserMessage(message) {
    var chatContainer = document.getElementById('chat-container');
    var userMessage = document.createElement('p');
    userMessage.classList.add('user-message');
    userMessage.textContent = message;
    chatContainer.appendChild(userMessage);
    chatContainer.scrollTop = chatContainer.scrollHeight;
}

function getBotResponse(question) {
    // This function should handle sending the question to the chatbot backend
    // and receiving the bot's response. For this example, we'll just use
    // predefined responses.
    if (responses.hasOwnProperty(question.toLowerCase())) {
        displayBotMessage(responses[question.toLowerCase()]);
    } else {
        displayBotMessage("Sorry, I don't understand that question.");
    }
}

var responses = {
    'what is scrap management?': 'Scrap management is the process of efficiently handling and recycling waste materials or scrap produced during manufacturing processes.',
    'how can I manage scrap effectively?': 'To manage scrap effectively, you can implement strategies such as waste reduction, recycling, reusing materials, and optimizing manufacturing processes.',
    'what are the benefits of scrap management?': 'Scrap management offers several benefits, including cost savings through waste reduction, environmental sustainability by recycling materials, and improved efficiency in manufacturing processes.',
    'what are some common types of scrap materials in manufacturing?': 'Common types of scrap materials in manufacturing include metal scraps (such as aluminum, steel, and copper), plastic scraps, paper and cardboard scraps, and electronic waste (e-waste).',
    'why is scrap management important for businesses?': 'Scrap management is important for businesses because it helps reduce waste, lower production costs, improve environmental sustainability, and optimize manufacturing processes.',
    'what role does technology play in modern scrap management?': 'Technology plays a significant role in modern scrap management by enabling automation, data analysis, and optimization of recycling processes.',
    'how can businesses incentivize employees to participate in scrap management efforts?': 'Businesses can incentivize employees to participate in scrap management efforts by implementing reward programs, providing training on waste reduction and recycling, and fostering a culture of environmental responsibility.',
    'what are the risks associated with improper scrap management?': 'Improper scrap management can pose several risks, including environmental pollution, health hazards for workers, legal non-compliance, and reputational damage to businesses.',
    'how does proper scrap management impact overall production costs?': 'Proper scrap management can help reduce overall production costs by minimizing material waste, optimizing resource utilization, and potentially generating revenue from the sale of recycled materials.',
    'can scrap materials be turned into valuable resources?': 'Yes, scrap materials can often be turned into valuable resources through recycling or repurposing. Many scrap materials have intrinsic value and can be recycled into new products or materials.',
    // Add 10 more short questions related to scrap management here
    'what are the environmental benefits of scrap recycling?': 'Scrap recycling helps conserve natural resources, reduce energy consumption, decrease greenhouse gas emissions, and minimize pollution associated with waste disposal.',
    'what are some challenges in implementing effective scrap management practices?': 'Challenges in implementing effective scrap management practices include lack of awareness, insufficient infrastructure for recycling, regulatory compliance issues, and economic factors such as fluctuating market prices for recycled materials.',
    'how can businesses measure the effectiveness of their scrap management efforts?': 'Businesses can measure the effectiveness of their scrap management efforts by tracking metrics such as waste generation rates, recycling rates, cost savings from waste reduction, and environmental impact indicators.',
    'what are some best practices for handling hazardous scrap materials?': 'Best practices for handling hazardous scrap materials include proper labeling, storage, transportation, and disposal according to regulatory requirements, employee training on safe handling procedures, and regular inspections and maintenance of handling equipment.',
    'how can businesses stay informed about developments in scrap management technology and regulations?': 'Businesses can stay informed about developments in scrap management technology and regulations by attending industry conferences and seminars, subscribing to trade publications and newsletters, participating in industry associations and forums, and maintaining regular communication with regulatory agencies and technology vendors.',
};


    function toggleChatbot() {
        var chatbot = document.getElementById('chatbot');
        if (chatbot.style.display === 'none') {
            chatbot.style.display = 'block';
        } else {
            chatbot.style.display = 'none';
        }
    }
