<?php

use Illuminate\Database\Seeder;

class Post extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('posts')->insert([
            'manchete' => '10 tecnologias que veremos em carros no futuro',
            'noticia' => '1 - Carros que se comunicam : Imagine que você está atravessando um cruzamento e não consegue ver um outro carro passando pelo sinal vermelho e vindo em sua direção. Esse acidente poderia ser evitado se os carros se comunicassem, acionando os freios automaticamente.
            
            Montadoras já estão trabalhando nessa tecnologia chamada de Vehicle-to-Vehicle communication (V2V), que deve ajudar a reduzir o número de acidentes. 
            2 - Inteligência : Os carros devem acompanhar a tecnologia inteligente dos smartphones e começarem a aprender mais sobre os hábitos do motorista, como sintonizar automaticamente a rádio que você costuma ouvir ao ir para o trabalho, ou ainda enviar um SMS para seu chefe caso o trânsito faça com que você se atrase.
            
            3 - Autonomia : Empresas como Google e Nissan trabalham forte no desenvolvimento de carros autônomos, que podem até mesmo dispensar motoristas humanos. Esses carros serão capazes de fazer uma viagem sozinhos sabendo o caminho, desviando de obstáculos e com segurança. Nos próximos anos devemos ver os primeiros carros autônomos sendo demonstrados.
            
            4 - Realidade aumentada no para-brisa : Pense no visor do Exterminador do Futuro ou do Homem de Ferro. Agora imagine esse visor sendo o seu para-brisa, exibindo informações com tecnologia de realidade aumentada.
            
            A BMW já usa essa tecnologia para exibir algumas informações básicas no carro, como velocidade ou previsão do tempo, mas uma tecnologia mais avançada poderia identificar objetos à frente e mostrar outras informações, como a distância até aquele objeto, usando uma tela touchscreen.
            
            5 - Bateria Wireless : A Audi desenvolveu um protótipo do Audi TT Offroad que é capaz de carregar a bateria sem o uso de fios. Mas isso exige uma estrutura mais complicada, com placas de indução sendo colocadas no chão para transmitir a energia. Quando o carro passa sobre ela, é recarregado.
            
            6 - Conexão 4G : Um carro que se propõe a ser conectado e inteligente precisa ter uma boa conexão com a internet. A melhor maneira de fazer isso é com a conexão 4G, com altas velocidades, capazes de realizar tranquilamente tarefas como tocar música, mostrar previsão do tempo, mapas, ler e-mails, etc.
            
            7 - Motor elétrico : Os motores movidos a energia elétrica já não são novidade, mas eles devem se tornar cada vez mais comuns no futuro. A Tesla deu um passo importante nessa direção ao abrir suas patentes para que qualquer empresa possa usar suas tecnologias. O meio ambiente será o maior beneficiado.
            
            8 - Energia solar : Ainda deve demorar o dia em que os carros serão totalmente eficientes e movidos a energia solar, mas até lá, a energia solar já pode ajudar a armazenar energia. Alguns carros-conceito com painéis solares já foram demonstrados em eventos. Eles são capazes de recarregar a bateria do carro e aumentar a autonomia, diminuindo a dependência da gasolina.
            
            9 - Sistema operacional : Pra que serve um carro inteligente e com conexão 4G se ele não tem um bom sistema operacional para gerenciar isso tudo? Empresas como Google e Apple brigam para trazer suas versões de sistemas operacionais para os carros, com produtos como o Android Auto e o CarPlay. Em breve no carro mais perto de você.
            
            10 - Menos peso : Energia solar e motores elétricos são ótimos para o meio ambiente, mas diminuir o peso dos carros pode ajudar ainda mais a melhorar a autonomia. Quanto menos peso, menos energia gasta. Com o uso de materiais leves e peças com fibra de carbono, é possível deixar esse Ford Fusion 300 kg mais leve, chegando ao peso de um Ford Fiesta.',
            'urlImagem' => 'http://res.cloudinary.com/db79cecgq/image/upload/c_crop,h_810,w_1440,x_0,y_47/c_fill,h_900,w_1600/v1418746582/166065769.jpg',
            'urlFonte' => 'http://www.brasil.discovery.uol.com.br/10-tecnologias-que-veremos-em-carros-no-futuro/',
            'idUser' => 1,
            'palavraChave' => '10 carros do futuro',
            'created_at' => '2017-10-25 18:00:00',
        ]);
    }
}
