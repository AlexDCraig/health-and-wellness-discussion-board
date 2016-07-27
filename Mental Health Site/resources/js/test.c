public class Email

{

    public Email() { } // This is constructor

    public String Title;

    public String Detail;

    public String SenderEmail;

    public String[] ReceiverEmails;

    String UniquiID; // Unique id associated with each and every email.

    DateTime TimeStamp; // Time when email was sent.

}


/*
 -  Send an email from A to B, verify that it has been received by B. 
*/


public class EmailUtility

{      

    public String Send(Email email, String password)

    {

        // first check if email.SenderEmail and password constitutes valid username and password for osu user. Returns “INCORRECT EMAIL OR             PASSWORD” if login issues.  

         // IF login is OK then sends the email to receiver(s).

         // returns “ALL GOOD” if email is sent.

         // returns “NOT GOOD” if issue with sending email.

    }

    public Email[ ] GetAllEmails(string userEmail, string password)

    {

       // first check if userEmail and password constitutes valid username and password for osu user. Returns “INCORRECT EMAIL OR                            PASSWORD” if login issues.

      //Return all the emails that the user contains in the inbox in descending order by timestamp.  

          

    }

      

public Email GetAParticlarEmailDetails(string username, string password, string     uniqueID)

       {

         //Login works normally as in previous cases.

         // if uniqueID is email.uniqueID of one of the user’s emails, returns the full Email detail.

         // if not, return null.         

    }

}

//S ample Usage: This is an example of sample usage. This is not a test. Also, this is not the only way sender and receiver might behave. 
// Sample usage is provided to you as a starting point. As you can see in sample usage, aburasa is sending the email and Zhang is opening and reading that email. (If the email is the first one in Zhang's mail box)

public void SampleSender()

    {

        Email email = new Email();

        email.SenderEmail = "aburasa@oregonstate.edu";

        email.ReceiverEmails = new String[2];

        email.ReceiverEmails[0] = "zhangh7@oregonstate.edu";

        email.ReceiverEmails[1] = "aburasaa@oregonstate.edu";

        email.Title = "CS 362 Midterm Grading";

        email.Detail= "Hi All, \n \n Let us try to finish it this weekend. \n\n -aburasa";

        email.TimeStamp = DateTime.Now;

        email.UniquiID = Give Me A 128 Character Long Unique ID();

        EmailUtility emailUtility = new EmailUtility();

        String didItGoThrough = emailUtility.Send(email, "MyAwesomePassword");

   PrintLine(didItGoThrough);        

     }

public void SampleReceiver()

       {

        EmailUtility emailUtility = new EmailUtility();

        Email[ ] emails = emailUtility.GetAllEmails(“zhangh7@oregonstate.edu”, “ZhangPassword”);

        for(int i = 0; i < emails.Length; i++)

        {

            //List the email, just like in your google email.

            PrintLine(emails[i].SenderEmail + "|" + emails[i].Title + "|" + emails[i].TimeStamp);

        }

        // open first email and read.

        Email email = emailUtility.GetAParticlarEmailDetails(“zhangh7@oregonstate.edu”, “Zhangassword”,emails[0].UniquiID);

   If(email == null){

            PrintLine(“Error in reading email”);

                return;

             }       

        PrintLine(email.Detail);

         return;

    }