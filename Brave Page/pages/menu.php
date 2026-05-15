<nav class="menu">
  <ul>
    <li> <a href='/index.php'>Home</a></li>
    <!--Session Log with submenu-->
    <li> 
       <a href='#'>Session Log</a>
       <ul class="dropdown-content">
         <li><a onclick="loadContent('Sessions/Session1', this);">Session #1</a></li>
         <li><a onclick="loadContent('Sessions/Session2', this);">Session #2</a></li>
         <li><a onclick="loadContent('Sessions/Session3', this);">Session #3</a></li>
         <li><a onclick="loadContent('Sessions/Session4', this);">Session #4</a></li>
       </ul>
    </li>
    <li> <a onclick="loadContent('Characters',this);">Characters</a></li>
    <li> <a onclick="loadContent('Bestiary',this);">Bestiary</a></li>
    <!-- External links with submenu -->    
    <li> 
       <a href='#'>External links</a>
       <ul class="dropdown-content">
         <li><a target="_blank" href="https://github.com/PeriklisStamatis" rel="noopener noreferrer">My Github</a></li>
         <li><a target="_blank" href="https://knightattheopera.blogspot.com/p/brave-my-knave-hack.html" rel="noopener noreferrer">Brave</a></li>
         <li><a target="_blank" href="https://questingbeast.itch.io/knave" rel="noopener noreferrer">Knave</a></li>
      </ul>
    </li>
  </ul>
</nav>
