<style>
    .nota {
        padding: 1rem;
        border-radius: 1rem;
        margin: 0 auto 2rem auto;
        width: 80%;
        max-height: 12rem;
        box-shadow: 0 0 1rem #343a40;
        position: relative;
        overflow: auto;
        border: 2px solid #343a40;
    }

    .nota h3 {
        overflow: hidden;
        height: 2.3rem;
        line-height: 2.3rem;
        max-width: 65%;
    }

    .text-nota {
        font-family: Arial, Helvetica, sans-serif;
        justify-content: left;
    }

    .form-aggiungi-posizione {
        background-color: rgba(0, 0, 0, 0.8);
        width: 100%;
        height: 100%;
        display: block;
        position: fixed;
        right: 0;
        top: 0;
    }

    .container-form {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
    }

    .form-aggiungi {
        display: flex;
        flex-flow: column wrap;
        border: solid #007bff;
        border-width: 0;
        border-radius: 1rem;
        background-color: #f8f9fa;
        z-index: 1000;
    }

    .form-aggiungi * {
        padding: 1rem;
        border: none;
        outline: none;
    }

    .form-aggiungi [name=titolo] {
        border-bottom: 1px solid grey;

    }

    .form-aggiungi [type="submit"] {
        border-bottom-left-radius: 1rem;
        border-bottom-right-radius: 1rem;
        background-color: #28a745;
        color: white;
    }

    .barra-superiore {
        background-color: #007bff;
        padding: 0.5rem 1rem 0 1rem;
        border-top-left-radius: 1rem;
        border-top-right-radius: 1rem;
        overflow: hidden;
        color: white;

    }

    .titolo-barra-superiore {
        float: left;
        margin-bottom: 0.4rem;
    }

    #icona-barra-superiore {
        float: right;
    }

    #testo {
        resize: none;
    }

    .hidden {
        display: none;
    }

    .elimina,
    .modifica {
        position: absolute;
        top: 1.9rem;
        right: 5%;
        border-radius: 1rem;
        transform: translateY(-50%);
        box-shadow: 0 0 0 60rem rgba(0, 0, 0, 0.7);
    }

    .modifica {
        box-shadow: 0 0 0 60rem rgba(0, 0, 0, 0.4);
    }

    .elimina a:hover {
        text-decoration: none;
    }

    .container-nota {
        position: relative;
        margin-bottom: 1rem;

    }

    #container-button {
        display: flex;
        position: fixed;
        bottom: 1.5rem;
        right: 0.5rem;
        flex-flow: column;
    }

    #container-button button {
        border-radius: 50%;
        width: 3.5rem;
        height: 3.5rem;
        padding: 0.1rem;
        margin: 0.2rem;
        box-shadow: 0 0 1rem #343a40;
    }

    @media (max-height: 600px) {
        textarea[name='testo'] {
            height: 3.5rem;
            overflow: auto;
        }

        .form-aggiungi [type="submit"],
        [name='testo'],
        [name='titolo'] {
            padding: 0.2rem 1rem;
        }

        .form-aggiungi{
            width: 90vw;
        }
        }
</style>