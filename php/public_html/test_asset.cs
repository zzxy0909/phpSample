using System.Collections;
using System.Collections.Generic;
using UnityEngine;


public class MyUpload : MonoBehaviour
{
    public TextAsset m_assetData;
    public string m_LocalFileName = "test_asset";
    public string m_URL = "http://zzxy72.esy.es/gamesavefile.php";

    IEnumerator UploadFileCo(string localFileName, string uploadURL)
    {
        //WWW localFile = new WWW("file:///D:/" + localFileName);
        //yield return localFile;
        //if (localFile.error == null)
        //    Debug.Log("Loaded file successfully");
        //else
        //{
        //    Debug.Log("Open file error: " + localFile.error);
        //    yield break; // stop the coroutine here
        //}

        //Debug.Log(localFile.size);

        WWWForm postForm = new WWWForm();
        // version 1
        //postForm.AddBinaryData("theFile",localFile.bytes);

        // version 2
        // postForm.AddBinaryData("file", localFile.bytes, localFileName);
        postForm.AddBinaryData("file", m_assetData.bytes, localFileName);

        WWW upload = new WWW(uploadURL, postForm);

        yield return upload;

        if (upload.error == null)
            Debug.Log("upload done :" + upload.text);
        else
            Debug.Log("Error during upload: " + upload.error);
    }

    void UploadFile(string localFileName, string uploadURL)
    {
        StartCoroutine(UploadFileCo(localFileName, uploadURL));
    }

    void OnGUI()
    {
        GUILayout.BeginArea(new Rect(0, 0, Screen.width, Screen.height));
        m_LocalFileName = GUILayout.TextField(m_LocalFileName);
        m_URL = GUILayout.TextField(m_URL);
        if (GUILayout.Button("Upload"))
        {
            UploadFile(m_LocalFileName, m_URL);
        }
        GUILayout.EndArea();
    }
}
