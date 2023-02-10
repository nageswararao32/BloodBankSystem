import java.sql.*;

public class slm {

	public static void main(String[] args) {
		// TODO Auto-generated method stub
		try 
		{
Class.forName("com.mysql.jdbc.Driver");			
Connection conn=DriverManager.getConnection("jdbc:mysql://localhost:3306/test","root","");
Statement st=conn.createStatement();
String sql="select *from Login_Detail";
ResultSet rs=st.executeQuery(sql);
while(rs.next())
{
	System.out.println(rs.getString(1)+" "+rs.getString(2));
	conn.close();
}
		}
catch(Exception e)
		{
		System.out.println(e);	
		}
	}

}