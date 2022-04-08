<style>
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
        border-bottom-left-radius: 1rem;
        border-bottom-right-radius: 1rem;
        background-color: #007bff;
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

    #foto {
        color: white;
        background-color: #6c757d;
    }

    .hidden {
        display: none;
    }

    .box-foto {
        width: 100%;
        padding-left: auto;
        padding-right: auto;
    }

    .box-foto img {
        width: 100%;
        margin-bottom: 1rem;
        height: 16rem;
        object-fit: contain;
        background-color: black;
        border-radius: 0.4rem;
    }

    .elimina {
        position: absolute;
        bottom: 0;
        right: 0.5rem;
        border-radius: 0.4rem;
        line-height: 1rem;
        margin: 1.5rem 0.375rem;
        font-size: 1rem;
    }

    .elimina a:hover {
        text-decoration: none;
    }

    .container-foto {
        position: relative;
        margin-bottom: 1rem;
        box-shadow: 0 0 0.2rem #6c757d;
        border-top-right-radius: 0.4rem;
        border-top-left-radius: 0.4rem;
        width: 100%;
        padding-bottom: 0.2rem;
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

    .rinomina {
        border: none;
        outline: none;
        padding: 0.375rem;
        font-size: 1rem;
        line-height: 1rem;
    }

    .rinomina[type=text] {
        width: 70%;
    }

    .rinomina[type=submit] {
        width: 30%;
        border-radius: 0.4rem;
    }

    .form-modifica-nome {
        width: 100%;
        display: flex;
        justify-content: space-between;
        margin-bottom: 1rem;
        line-height: 1rem;
        padding: 0.375rem;
    }

    @media (min-width: 768px) {
        .resume-section-content {
            display: flex;
            flex-flow: row wrap;
            justify-content: start;
            align-self: flex-start;
        }

        .container-foto {
            max-width: 42%;
            margin: 1rem;
        }
    }
</style>