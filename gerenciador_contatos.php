<?php  

class Contact {  
    // Atributos da classe Contact  
    private $name;  
    private $email;  
    private $phone;  

    // Construtor para inicializar o contato  
    public function __construct($name, $email, $phone) {  
        $this->name = $name;  
        $this->email = $email;  
        $this->phone = $phone;  
    }  

    // Método para obter o nome do contato  
    public function getName() {  
        return $this->name;  
    }  

    // Método para obter o endereço de e-mail do contato  
    public function getEmail() {  
        return $this->email;  
    }  

    // Método para obter o número de telefone do contato  
    public function getPhone() {  
        return $this->phone;  
    }  

    // Método para atualizar o endereço de e-mail do contato  
    public function setEmail($email) {  
        $this->email = $email;  
    }  

    // Método para atualizar o número de telefone do contato  
    public function setPhone($phone) {  
        $this->phone = $phone;  
    }  
}  

// Exemplo de uso da classe Contact  
$contact = new Contact("Fábia Fuzinato", "fabia.fuzinato@email.com", "123456789");  

// Exibindo informações sobre o contato  
echo "Nome: " . $contact->getName() . "<br>";              // Saída: Nome: João Silva  
echo "E-mail: " . $contact->getEmail() . "<br>";          // Saída: E-mail: joao.silva@email.com  
echo "Telefone: " . $contact->getPhone() . "<br>";        // Saída: Telefone: 123456789  

// Atualizando o e-mail e telefone do contato  
$contact->setEmail("fabia.fuzinato@email.com");  
$contact->setPhone("(62) 99627-0357");  

echo "Novo E-mail: " . $contact->getEmail() . "<br>";     // Saída: Novo E-mail: joao.novo@email.com  
echo "Novo Telefone: " . $contact->getPhone() . "<br>";   // Saída: Novo Telefone: 987654321  

?>
Explicação
Classe Contact: Define a classe Contact com três atributos: name, email e phone.

Construtor: O construtor inicializa o nome, o e-mail e o telefone do contato.

Métodos:

getName(): Retorna o nome do contato.
getEmail(): Retorna o endereço de e-mail do contato.
getPhone(): Retorna o número de telefone do contato.
setEmail($email): Atualiza o endereço de e-mail do contato.
setPhone($phone): Atualiza o número de telefone do contato.
Exemplo de Uso: A parte final do código mostra como criar uma instância da classe Contact, exibir suas informações e atualizar o e-mail e o telefone.