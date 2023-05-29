import { useState, useEffect } from "react";
import './App.css';


function App() {
  const initialValues = { username: "", email: "", password: "" };
  const [formValues, setFormValues] = useState(initialValues);
  const [formErrors, setFormErrors] = useState({});
  const [isSubmit, setIsSubmit] = useState(false);
  const handleChange = (e) => {
    const { name, value } = e.target;
    setFormValues({ ...formValues, [name]: value });
  }

  const handleSubmit = (e) => {
    e.preventDefault();
    setFormErrors(validate(formValues));
    setIsSubmit(true);
    //form verilerini local storage kaydetme
    localStorage.setItem("formValues", JSON.stringify(formValues));
  }
  function ViewFormValues(){
    // kaydedilen verileri local storageden alın 
    const savedFormValues = JSON.parse(localStorage.getItem("formValues"));
    return (
          <div>
            <pre>{JSON.stringify(savedFormValues, undefined, 2)}</pre>
          </div>

    );
  }



  useEffect(() => {
     console.log(formErrors);
    if(Object.keys(formErrors).length === 0 && isSubmit){
      console.log(formValues);
    }
    },[formErrors])
  const validate = (values) => {
    const errors={};
    const regex = /^[^\s@]+@[^\s@]+\.[^\s@]{2,}$/i;
    if(!values.username){
      errors.username = "ismi boş bırakmayın";
    }
    if(!values.email){
      errors.email = "soyismi boş bırakmayın";
    }else if (!regex.test(values.email)){
      errors.email="girilen veri email formatında değil";
    }
    if(!values.password){
      errors.password = "şifreyi boş bırakmayın";
    }
    return errors;
  };
   



  return (
    <div className="container" id="container">
       {Object.keys(formErrors).length === 0 && isSubmit ? (<div className="başarılı">giriş başarılı</div>) :
       (
        <pre>{JSON.stringify(formValues, undefined, 2)}</pre>
       )}

      
      <form onSubmit={handleSubmit} method="POST" action="App.php" id="form">
        <h1>FORM </h1>
        <h6>formu boş geçince hata verir</h6>
        <h6>girilen veri mail fotmatında değilse hata verir</h6>
        
        
        <div className="ui divider"></div>
        <div className="ui form">
          <div className="field">
            
            <input
              id="username"
              type="text"
              name="username"
              placeholder="username"
              onChange={handleChange}
            />
          </div>
          <p>{ formErrors.username }</p>
          <div className="field">
           
            <input 
              id="email"
              type="email"
              name="email"
              placeholder="email"
              value={formValues.email}
              onChange={handleChange}
            />
          </div>
          <p>{ formErrors.email }</p>
          <div className="field">
            
            <input
            id="password"
              type="password"
              name="password"
              placeholder="password"
              value={formValues.password}
              onChange={handleChange}
            />
          </div>
          <p>{ formErrors.password }</p>
          <button className="fluid ui button blue" id="submit">Submit</button>
          <button type="reset" value="Temizle" id="temiz">Temizle</button>
        </div>
      </form>
    </div>
  );
}

export default App;
