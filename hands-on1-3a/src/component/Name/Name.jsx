import './Name.css'

function Name({fullname,}){

    return (
    <div>
        <h1><span className= 'text-blue'>{fullname}</span></h1>
    </div>
    )
}
export default Name;