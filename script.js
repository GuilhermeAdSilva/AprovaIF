console.log("Site Educacional IF Técnico carregado!");


const perguntas = [
    "Qual é a capital do Brasil?",
    "Quanto é 5 x 6?",
    "Quem escreveu 'Dom Casmurro'?",
    "O que é HTML?",
    "Qual a fórmula da água?"
  ];
  
  function proximaPergunta() {
    const pergunta = perguntas[Math.floor(Math.random() * perguntas.length)];
    document.getElementById("pergunta").innerText = pergunta;
  }
  