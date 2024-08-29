import logo from './logo.svg';
import './App.css';
import Name from'./component/Name/Name';
import Section from './component/Section/Section';
import Description from './component/Description/Description';

function App() {
  const UserInfo = {
    fname: "John Marwin Castillo",
    section: "BSIT-3A",
    description: "KAKAYANIN KO TO!!"
  }
return (
<div classname="App">
<Name fullname={UserInfo.fname}/>
<Section section={UserInfo.section}/>
<Description description={UserInfo.description}/>
</div>
)} 

export default App;
