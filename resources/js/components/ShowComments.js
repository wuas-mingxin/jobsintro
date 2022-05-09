import React, {useState,useEffect} from 'react';

function ShowComments(props) {
    const [commnets,setCommets] = useState([]);
    useEffect(()=>{
        axios.get('comments/'+props.id).then((res)=>{
            console.log(res.data)
            console.log('comments Loaded')
            setCommets(res.data)
        
        })
    },[])


    return (
      <>
        {
        commnets.map((comment,i)=>{
            return (
                    <div key={i} id={`comment${i}`}>
                        <div className="flex">
                            <div className="w-10 h-10 rounded-full relative flex-shrink-0">
                                <img src={"http://" + window.location.hostname + ":8000/" + comment.user.avtar}
                                    alt="" className="absolute h-full rounded-full w-full"/>
                            </div>
                            <div>
                                <div
                                    className="text-gray-700 py-2 px-3 rounded-md bg-gray-100 relative lg:ml-5 ml-2 lg:mr-12  dark:bg-gray-800 dark:text-gray-100">
                                    <p className="leading-6">{comment.content}<i className="i uil-heart"></i> <i
                                        className="uil-grin-tongue-wink"> </i></p>
                                    <div
                                        className="absolute w-3 h-3 top-3 -left-1 bg-gray-100 transform rotate-45 dark:bg-gray-800"></div>
                                </div>
                                <div className="text-sm flex items-center space-x-3 mt-2 ml-5">
                                    <a href="#" className="text-red-600"> <i className="uil-heart"></i> Love </a>
                                    <a href="#"> Replay </a>
                                    <span> 3d </span>
                                </div>
                            </div>
                        </div>
                    </div>
            )
            
        })
    }
      </>
    );
}

export default ShowComments;
