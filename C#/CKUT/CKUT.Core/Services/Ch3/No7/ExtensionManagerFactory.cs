namespace CKUT.Core.Services.Ch3.No7
{
    public class ExtensionManagerFactory
    {
        private static IFileExtensionManager _fileExtensionManager = null;
        public static IFileExtensionManager Create()
        {
            if (_fileExtensionManager != null)
            {
                return _fileExtensionManager;
            }

            _fileExtensionManager = new FileExtensionManager();
            return _fileExtensionManager;
        }
        public void SetManager(IFileExtensionManager fileExtensionManager)
        {
            _fileExtensionManager = fileExtensionManager;
        }
    }
}