<?php 
    class Usuario{
        # Variaveis do Usuario:
        private $id_usuario;
        private $des_login;
        private $des_senha;
        private $dt_cadastro;

        # Metodos GET_&_SET:
        # $id_usuario
        public function getIdUsuario():int
        {
            return $this->id_usuario;
        }
        public function setIdUsuario($id)
        {
            $this->id_usuario = $id;
        }
        # $des_login
        public function getDesLogin():string
        {
            return $this->des_login;
        }
        public function setDesLogin($login)
        {
            $this->des_login = $login;
        }
        # $des_senha
        public function getDesSenha():string
        {
            return $this->des_senha;
        }
        public function setDesSenha($senha)
        {
            $this->des_senha = $senha;
        }
        # $dt_cadastro
        public function getDtCadastro()
        {
            return $this->dt_cadastro;
        }
        public function setDtCadastro($dt_cad)
        {
            $this->dt_cadastro = $dt_cad;
        }

        # Carrega um usuario pelo id_usuario:
        public function loadById($id)
        {
            # Inicia o Banco de dados:
            $sql = new SQL();

            # Faz um SELECT no banco:
            $results = $sql->dbSelect('SELECT * FROM tb_usuarios WhERE id_usuario = :ID', array(
                ':ID' => $id
            ));

            # Testa se o SELECT retornou alguma informação
            if ($results[0] > 0)
            {
                # Recebe a primeira linha que foi retornada:
                $row = $results[0];

                # Inicia o usuario com os dados do banco:
                $this->setIdUsuario($row['id_usuario']);
                $this->setDesLogin($row['desLogin']);
                $this->setDesSenha($row['desSenha']);

                # Formata o data que foi recebida do banco: new DateTime($server_data);
                $this->setDtCadastro(new DateTime($row['dt_cadastro']));
            }
        }
        # Função de retorno padrão:
        public function __toString()
        {
            return json_encode(array(
                'id_usuario'=>$this->getIdUsuario(),
                'login'=>$this->getDesLogin(),
                'senha'=>$this->getDesSenha(),
                'cadastro'=>$this->getDtCadastro()->format('d/m/Y H:i:s')
            ));
        }
    }
?>