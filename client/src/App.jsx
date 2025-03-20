import { useState } from "react";
import reactLogo from "./assets/react.svg";
import viteLogo from "/vite.svg";
import "./App.css";

function App() {
  const [count, setCount] = useState(0);

  return (
    <>
    <header>
      <nav>
        <a href="http://localhost/justfight/server/showusers.php">Registered Users</a>
      </nav>
    </header>
      <div>
        <form
          action="http://localhost/justfight/server/adduser.php"
          method="post"
        >
          <input type="text" placeholder="user name" name="username" /> <br />
          <input type="password" placeholder="password" name="password" /><br />
          <input type="submit" value="submit" />
        </form>
      </div>
    </>
  );
}

export default App;
