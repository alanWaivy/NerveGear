
<head>

<style>
      a {
    text-decoration: none;  
      }
        /* sortby & filter & searchBar style start */

        div#btns {
        display: flex;
        flex-direction: row;
        flex-wrap: nowrap;
        gap: 13px;
        }

        div#sb {
        display: flex;
        justify-content: flex-end;
        width: 70%;
        }





        /* sortby & filter & searchBAr style end */

        .button p {
        color: white;
        font-weight: 550;
        font-size: 14px!important;
        }

        .button {
        display: flex;
        gap: 10px;
        background: #00A3FF;
        padding: 0px 10px!important;
        align-items: center;
        margin-top: 20px;

        border-radius: 10px;
        }

        .filtering {
        display: flex;
        gap: 200px;
        width: 100%;
        margin-bottom: -80px;
        align-items: center;
        transform: scale(0.8);
        margin-top: 97px;
        }

        .material-symbols-outlined {
        color: rgb(255, 255, 255);
        }

        .searchBar i {
        transform : rotateY(-180deg);
        color:white;
        }

        .searchBar button {
        border :none;
        padding :5px 20px;
        border-radius:25px;
        background : #00A3FF;
        transition: transform 300ms;
        margin-top: .3px;
        }

        .searchBar input {
        border: none;
        margin-left: 5px;
        width: 79%;
        }

        .searchBar input:focus {
        outline:none;
        }

        .searchBar {
        height: 30px;
        border: 1.5px #00A3FF solid;
        width: 300px;
        padding: 4px 0px;
        border-radius: 25px;
        padding-bottom: 0px !important;
        margin-top: 20px;
        display: flex;
        align-content: center;
        align-items: baseline;
        flex-direction: row;
        flex-wrap: nowrap;
        justify-content: flex-start;
        }

        .searchBar input::placeholder {
        color:grey;
        font-size:13px;
        font-weight:700;
        }

        .searchBar button:hover {
        transform:scale(.9);
        opacity:.8;
        }

</style>

<script src="https://kit.fontawesome.com/abfa77da96.js" crossorigin="anonymous"></script>

</head>


<div class="filtering">
      
      <div id="btns">
      <a href="#">
        <div class="button">
          <p>Sort By</p>
          <span class="material-symbols-outlined">
          <i class="fa-solid fa-sort"></i>
          </span>
        </div>
      </a>

     
      <a href="#">
        <div class="button">
          <p>Filter</p>
          <span class="material-symbols-outlined">
          <i class="fa-solid fa-filter"></i>
          </span>
        </div>
      </a></div>

      <div id="sb">

      <div class="searchBar">
        <input type="search" id="site-search" name="q"  placeholder="Search... " />
        
        <button>
          <i class="fa-solid fa-magnifying-glass"></i>
          
        </button>
          
          
        </div></div>


    </div>

