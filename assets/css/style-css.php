<style type="text/css">
/* ================================================================================ */
/*                                     General                                      */
/* ================================================================================ */

*
{
    top: 0;
    left: 0;
    margin: 0;
    padding: 0;
    text-decoration: none;
    list-style: none;
    scroll-behavior: smooth;
    font-family: sans-serif;
}

body 
{
    background-color: azure;
    padding: 0;
}

/* ================================================================================ */
/*                                       Main                                       */
/* ================================================================================ */

/* ==================== Navbar ==================== */

nav
{
    position: fixed;
    height: 100vh;
    width: 240px;
    z-index: 1000;
}

nav .content 
{
    position: relative;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    align-items: center;
    height: 97%;
    width: 90%;
    margin: 10px;
    border: 1   px solid #142952;
    border-radius: 10px;
    background: #3366cc;
}

nav .content header
{
    width: 90%;
    margin: 10px 0;
}

nav .content header .logo
{
    display: flex;
    justify-content: center;
    width: 100%;
}

nav .logo img {
    width: 80%;
}

nav .content .docNav {
    width: 90%;
    margin: 10px 0;
}

nav .content footer
{
    width: 90%;
    margin: 10px 0;
}

hr
{
    background: #000;
    height: 1px;
    margin: 10px;
    border: none;
}

/* ===================== Page ===================== */

main
{
    max-width: 1920px;
    padding-left: 240px;
}

main .content
{
    display: flex;
    flex-direction: column;
    padding: 100px 100px 0 100px;
}

main .formPage
{
    height: 100vh;
    flex-direction: row;
    justify-content: center;
    align-items: center;
    padding: 0;
}

main .content .form
{
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    height: 400px;
    width: 400px;
    margin: 50px;
}

main .content .svg
{
    height: 500px;
    width: 500px;
}
</style>