# openboleto — Constituição do Módulo

> SDK PHP para geração de boletos bancários. Biblioteca legada — não modificar sem aprovação.

## Identidade
- Módulo: openboleto — SDK geração de boletos bancários
- Fork: `zucchetti-pos/openboleto`
- Parte do monorepo: zweb-projects

## Stack
- **Linguagem:** PHP ≥5.6
- **Testes:** PHPUnit ^5.7 / ^6.0
- **Gerenciador:** Composer

## Estrutura de pastas
```
openboleto/
├── src/
│   └── OpenBoleto/   # Classes de boleto por banco (PSR-4)
├── tests/            # Testes PHPUnit
├── samples/          # Exemplos de uso por banco
├── resources/        # Logos de bancos, templates de layout
└── phpunit.xml
```

## Comandos do projeto
```bash
# Instalar dependências
composer install

# Executar testes
./vendor/bin/phpunit --colors=always
```

## Restrições
- **SDK legado (PHP 5.6)** — evitar sintaxe PHP >5.6 sem validar retrocompatibilidade
- SDK externo (fork) — modificações exigem aprovação explícita
- Dados bancários reais (agência, conta, CPF/CNPJ do pagador) nunca em código ou testes
- Layouts de boleto por banco são normativos — alterações exigem validação bancária
